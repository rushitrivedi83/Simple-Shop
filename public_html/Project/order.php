
<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
if ( isset($_POST["address"]) && strlen($_POST["address"]) > 0) {
	$address = $_POST["address"];
	$city = $_POST["city"];
	$state = $_POST["state"];
	$zip = $_POST["zip"];
	$fullAdd = $address . ", " . $city . ", " . $state . " " . $zip;

	$payment = $_POST["payment"];
	$amount = $_POST["amount"];

	$user_id = get_user_id();
	if ($user_id > 0) {
		$db = getDB();
		$stmt = $db->prepare("SELECT name, c.id as line_id, product_id, desired_quantity, c.unit_price, (c.unit_price*desired_quantity) as subtotal FROM Cart c JOIN Products i on c.product_id = i.id WHERE c.user_id = :uid");
		try {
			$stmt->execute([":uid" => $user_id]);
			$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
			$balance = $amount;
			$total_cost = 0;
			foreach ($results as $row) {
				$total_cost += (float)se($row, "subtotal", 0, false);
			}
			if ($balance >= $total_cost) {
				//can purchase
				$db->beginTransaction();
				$stmt = $db->prepare("SELECT max(id) as order_id FROM Orders");
				$next_order_id = 0;
				//get next order id
				try {
					$stmt->execute();
					$r = $stmt->fetch(PDO::FETCH_ASSOC);
					$next_order_id = (int)se($r, "order_id", 0, false);
					$next_order_id++;
				} catch (PDOException $e) {
					error_log("Error fetching order_id: " . var_export($e));
					$db->rollback();
				}

				
				//deduct product stock (used to determine if out of stock as it'll fail with a constraint violation)
				if ($next_order_id > 0) {
					$stmt = $db->prepare("UPDATE Products 
					set stock = stock - (select IFNULL(desired_quantity, 0) FROM Cart WHERE product_id = Products.id and user_id = :uid) 
					WHERE id in (SELECT product_id from Cart where user_id = :uid)");
					try {
						$stmt->execute([":uid" => $user_id]);
					} catch (PDOException $e) {
						error_log("Update stock error: " . var_export($e, true));
						flash("At least one of your items is low on stock and is unable to be purchased");
						$db->rollback();
						$next_order_id = 0; //using as a controller
					}
				}

				//Add Order to Orders table
				if ($next_order_id > 0) {
					$stmt = $db->prepare("INSERT INTO Orders (id, user_id, total_price, address, payment_method, money_received) 
					VALUES (:id, :user_id, :total_price, :address, :payment_method, :money_received)");
					try {
						$stmt->execute([
							":id" => (int)$next_order_id,
							":user_id" => (int)$user_id,
							":total_price" => (float)$total_cost,
							":address" => $fullAdd,
							":payment_method" => $payment,
							":money_received" => (float)$amount
						]);
					} catch (PDOException $e) {
						error_log("Error mapping data to Orders: " . var_export($e, true));
						$db->rollback();
						$next_order_id = 0; //using as a controller
					}
		
				}

				//map cart to order history
				if ($next_order_id > 0) {
					$stmt = $db->prepare("INSERT INTO OrderItems (product_id, user_id, quantity, unit_price, order_id) 
					SELECT product_id, user_id, Cart.desired_quantity, Products.unit_price, :order_id FROM Cart JOIN Products on Cart.product_id = Products.id
					WHERE user_id = :uid");
					try {
						$stmt->execute([":uid" => $user_id, ":order_id" => $next_order_id]);
					} catch (PDOException $e) {
						error_log("Error mapping cart data to order history: " . var_export($e, true));
						$db->rollback();
						$next_order_id = 0; //using as a controller
					}
				}

				//clear the user's cart now that the process is done
				if ($next_order_id > 0) {
					$stmt =  $db->prepare("DELETE from Cart where user_id = :uid");
					try {
						$stmt->execute([":uid" => $user_id]);
					} catch (PDOException $e) {
						error_log("Error deleting cart: " . var_export($e, true));
						$db->rollback();
						$next_order_id = 0; // using as a controller
					}
				}
				if ($next_order_id) {
					$db->commit(); //confirm pending changes
					flash("Purchase Complete");
					die(header("Location: confirm.php"));
				} else {
					$response["status"] = 200;
					http_response_code(200);
				}
			} else {
				flash("You can't afford to purchase your cart", "danger");
			}
		} catch (PDOException $e) {
			flash("Error Fetching Cart", "error");
		}
	}
}
?>
<script>
	function validate(form) {
		if( (form.address.value.length * form.city.value.length * form.state.value.length * form.zip.value.length * form.payment.value.length * form.amount.value.length) === 0) {
			flash("Please enter all the fields", "warning");
			return false;
		}
		return true;
	}
</script>

<div class="container">
	<br>
	<h1>Order Page</h1>
<hr class="mb-4">
  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
      </h4>
	  <div class="col-4" style="min-width:30em">
            <?php require(__DIR__ . "/../../partials/cart.php"); ?>
        </div>
    </div>

    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Billing address</h4>
      <form class="needs-validation" novalidate="" onsubmit="return validate(this)" method="POST">

        <div class="mb-3">
          <label for="address">Address</label>
          <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required="">
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">City</label>
			<input type="text" class="form-control" id="city" name="city" placeholder="Newark" required="">
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">State</label>
			<input type="text" class="form-control" id="state" name="state" placeholder="New Jersey" required="">
          </div>
          <div class="col-md-3 mb-3">
            <label for="zip">Zip</label>
            <input type="text" class="form-control" id="zip" name="zip" placeholder="" required="">
          </div>
        </div>
        <hr class="mb-4">

        <h4 class="mb-3">Payment</h4>

        <div class="d-block my-3">
			<label for="payment">Payment Method: </label>
			<select class="form-select form-select-md" name="payment" id="payment" aria-label=".form-select-md example">
				<option value="" selected>Please select a payment method</option>
				<option value="cash">Cash</option>
				<option value="visa">Visa</option>
				<option value="mastercard">MasterCard</option>
				<option value="amex">Amex</option>
			</select>
        </div>
        <div class="row">
          <div class="col">
            <label for="amount">Amount: </label>
            <input type="text" class="form-control" id="amount" name="amount" placeholder="" required="">
			<br>
          </div>
          
        <hr class="mb-4">
        <button class="btn w-100 btn-primary btn-lg btn-block" type="submit">Purchase</button>
      </form>
    </div>
  </div>

</div>
<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>