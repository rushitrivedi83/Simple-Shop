<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);

$user_id = get_user_id();
$db = getDB();
$results = [];

//get all categories
$stmt = $db->prepare("SELECT DISTINCT category from Products");
$stmt->execute();
$categories = $stmt->fetchAll();


$col = se($_GET, "col", "order_id", false);
$order = se($_GET, "order", "desc", false);
$cat = se($_GET, "category", "all", false);
$start = se($_GET, "start_date", "", false);
$end = se($_GET, "end_date", "", false);

//allowed list
if (!in_array($col, ["order_id", "total_price", "created"])) {
    $col = "order_id"; //default value, prevent sql injection
}




// $base_query =  "SELECT order_id as 'Order ID', Orders.user_id as 'User ID', OrderItems.product_id as 'Product ID', Orders.created as 'Order Placed', OrderItems.quantity as 'Quantity', (OrderItems.unit_price * OrderItems.quantity) as Subtotal, address as 'Address', payment_method as 'Payment Method', money_received as 'Payment Received', Products.category as 'Category'
// FROM OrderItems
// JOIN Orders on OrderItems.order_id = Orders.id
// JOIN Products on OrderItems.product_id = Products.id";

$base_query = "SELECT DISTINCT order_id as 'Order ID', Orders.user_id as 'User ID', Orders.created as 'Order Placed', total_price as Cost, address as 'Address', payment_method as 'Payment Method' , money_received as 'Payment Received'
FROM OrderItems JOIN Orders ON OrderItems.order_id = Orders.id
JOIN Products ON OrderItems.product_id = Products.id
";

// $base_query = "SELECT id as 'Order ID', user_id as 'User ID', created as 'Order Placed', total_price as Cost, address as 'Address', payment_method as 'Payment Method' , money_received as 'Payment Received'
// FROM Orders";


if (has_role("Admin")) {
	$query = "";
	$params = [];

	//paginate function
	$per_page = 10;
	$total_query = "SELECT count(1) as total FROM Orders";

	//apply category filter
	if(!empty($cat) && $cat != "all") {
		$query .= " AND Products.category = :category";
		$params[":category"] = $cat; 
	} 

	//Apply date filter
	if(!empty($start) && !empty($end)) {
		$query .= " AND Orders.created BETWEEN :start AND :end";	
		$params[":start"] = $start;
		$params[":end"] = $end;  
	}


	paginate($total_query . $query, $params, $per_page);

	//apply column and order sort
	if (!empty($col) && !empty($order)) {
		$query .= " ORDER BY $col $order"; 
	}

	$query .= " LIMIT :offset, :count";
	$params[":offset"] = $offset;
	$params[":count"] = $per_page;

	$stmt = $db->prepare($base_query . $query); //dynamically generated query

	foreach ($params as $key => $value) {
		$type = is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR;
		$stmt->bindValue($key, $value, $type);
	}
	$params = null; //set it to null to avoid issues

    try {
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        error_log("Error getting orders for admin or shop owner" . var_export($e, true));
        $db->rollback();
    }
} else {
	$query = " WHERE OrderItems.user_id = :uid";
	$params = [":uid" => $user_id];

	//paginate function
	$per_page = 10;
	$total_query = "SELECT count(1) as total FROM Orders";

	//apply category filter
	if(!empty($cat) && $cat != "all") {
		$query .= " AND Products.category = :category";
		$params[":category"] = $cat; 
	} 

	//Apply date filter
	if(!empty($start) && !empty($end) && strlen($start) > 0 && strlen($end) > 0) {
		$query .= " AND Orders.created BETWEEN :start AND :end";	
		$params[":start"] = $start;
		$params[":end"] = $end;  
	}

	paginate($total_query . $query, $params, $per_page);

	//apply column and order sort
	if (!empty($col) && !empty($order)) {
		$query .= " ORDER BY $col $order"; 
	}

	$query .= " LIMIT :offset, :count";
	$params[":offset"] = $offset;
	$params[":count"] = $per_page;

	$stmt = $db->prepare($base_query . $query); //dynamically generated query

	foreach ($params as $key => $value) {
		$type = is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR;
		$stmt->bindValue($key, $value, $type);
	}
	$params = null; //set it to null to avoid issues

    try {
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        error_log("Error getting orders for admin or shop owner" . var_export($e, true));
        $db->rollback();
    }
}



?>
<script>
	function validate(form) {
		console.log(form);

		let pass = true;
		if(form.start_date.value.length > 0 && form.end_date.value.length <= 0) {
			flash("Please enter a date range with BOTH starting and end date", "warning");
			pass=false;
		}

		return pass;
	}
</script>

<div class="container mt-5 mb-5">
<form class="row row-cols-auto g-3 align-items-center" onsubmit="return validate(this)">
        <div class="col">
            <div class="input-group">
                <div class="input-group-text">Sort</div>
                <!-- make sure these match the in_array filter above-->
                <select class="form-control bg-info" style="width: auto;" name="col" value="<?php se($col); ?>" data="took">
					<option value="order_id">orderID</option> 
					<option value="total_price">Cost</option>
                    <option value="created">Order Placed</option>
                </select>
                <script>
                    //quick fix to ensure proper value is selected since
                    //value setting only works after the options are defined and php has the value set prior
                    document.forms[0].col.value = "<?php se($col); ?>";
                </script>
                <select class="form-control" style="width:auto;" name="order" value="<?php se($order); ?>">
                    <option class="bg-white" value="asc">Up</option>
                    <option class="bg-white" value="desc">Down</option>
                </select>
                <script data="this">
                    //quick fix to ensure proper value is selected since
                    //value setting only works after the options are defined and php has the value set prior
                    document.forms[0].order.value = "<?php se($order); ?>";
                    if (document.forms[0].order.value === "asc") {
                        document.forms[0].order.className = "form-control bg-success";
                    } else {
                        document.forms[0].order.className = "form-control bg-danger";
                    }
                </script>
			</div>
		</div>
		<div class = "col">	
			<div class="input-group">
                <div class="input-group-text">Filters</div>
                <!--- Select categories -->
                <select class="form-control" style="width:auto;background:#ee8080;" name="category" value="<?php se($cat);?>">
                    <option value="all">All</option>
                    <?php foreach($categories as $category):?>
                        <option value="<?php se($category, 'category');?>">
                            <?php se($category, 'category');?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <script data="this">
                    document.forms[0].category.value = "<?php se($cat); ?>";
                </script>
				 <div class="input-group-text"> Between </div>

				<input type="date" name="start_date"/>
				<script data="this">
                    document.forms[0].start_date.value = "<?php se($start); ?>";
                </script>
				<div class="input-group-text"> And </div>

				<input type="date" name="end_date"/>
				<script data="this">
                    document.forms[0].end_date.value = "<?php se($end); ?>";
                </script>
			</div>

        </div>
        <div class="col">
            <div class="input-group">
                <input type="submit" class="btn btn-primary" value="Apply" />
            </div>
        </div>
		<div class="col">
			<div class="input-group">
                <a href="purchase_history.php" class="btn btn-secondary" value="Reset">RESET</a>
            </div>
        </div>
    </form>

    <div class="row d-flex justify-content-center">
        <div class="col-md-12">
            <div class="card">
				<br>
				<h1 style="padding-left: 30px">Purchase History</h1> <br>
				<?php $arr = array(); ?>
				<?php if (count($results) == 0) : ?>
					<p >No results to show</p>
				<?php else : ?>
					<table class="table">
						<?php foreach ($results as $index => $record) : ?>
							<?php $orderID = $record['Order ID'];
									$userID = $record['User ID'];
							?>
							<?php if ($index == 0) : ?>
								<thead>
									<?php foreach ($record as $column => $value) : ?>
										<?php if($column == 'category') continue; ?>
										<th><?php se($column); ?></th>
									<?php endforeach; ?>
									<th>Order Details</th>
								</thead>
							<?php endif; ?>
							<?php 
								if(in_array($orderID, $arr)):
										continue;
								else:
									array_push($arr, $orderID);
								endif;
							?>

							<tr>
								<?php foreach ($record as $column => $value) : ?>
									<?php if($column == 'category') continue; ?>
									<?php $formatted = number_format( (float) $value, 2); ?>
									<?php if($column == "Cost" || $column == "Payment Received") :?>
										<td>$<?php se($formatted, null, "N/A"); ?></td>
									<?php else :?>
										<td><?php se($value, null, "N/A"); ?></td>
									<?php endif; ?>
								
								<?php endforeach; ?>
								<td>
									<!-- other action buttons can go here-->
									<a class="btn btn-primary" href="order_details.php?id=<?php se($orderID, true); ?>&uid=<?php se($userID, true); ?>">Details</a>
								
								</td>
							</tr>
						<?php endforeach; ?>
					</table>
					<div class="mt-3">
							<?php require(__DIR__ . "/../../partials/pagination.php"); ?>
					</div>
				<?php endif; ?>

			</div>
		</div>
	</div>
</div>

<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>