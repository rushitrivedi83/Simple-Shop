<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
?>
<?php
/*
Show the entire order details from the Order and OrderItems table (similar to cart)
Including a the cost of each line item and the total value
Show how they purchased and how much they paid
Displays a Thank you message
*/
$db = getDB();
$db->beginTransaction();
$order_id = $_GET['id'];
//get next order id
$user_id = get_user_id();



$stmt = $db->prepare("SELECT * FROM Orders WHERE id = :order_id");
try {
	$stmt->execute([":order_id" => $order_id]);
	$orderVal = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
	error_log("Error fetching order_id: " . var_export($e));
	$db->rollback();
}


$stmt = $db->prepare("SELECT product_id, quantity, OrderItems.unit_price, total_price, address, payment_method, money_received, image, name 
FROM Orders 
JOIN OrderItems on Orders.id = OrderItems.order_id 
JOIN Products on OrderItems.product_id = Products.id
WHERE Orders.user_id = :uid and Orders.id = :order_id");
try {
	$stmt->execute([":uid" => $user_id ,":order_id" => $order_id]);
	$orderList = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
	error_log("Error fetching order_id: " . var_export($e));
	$db->rollback();
}

$totalFormatted = $orderVal['total_price'];
$moneyPaidFormatted = $orderVal['money_received'];

$moneyPaidFormatted = number_format($moneyPaidFormatted, 2);
$totalFormatted = number_format($totalFormatted, 2);





?>

<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card">
				<br>
				<h1 style="padding-left: 30" >Order Details</h1>
                <div class="text-left logo p-2 px-5"> <h3>Rushh</h4> </div>
                <div class="invoice p-5">
                    <div class="payment border-top mt-3 mb-3 border-bottom table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="py-2"> <span class="d-block text-muted">Order Date</span> <span>  <?php se($orderVal, "created", true) ?> </span> </div>
                                    </td>
                                    <td>
                                        <div class="py-2"> <span class="d-block text-muted">Order No</span> <span> <?php se($orderVal, "id", true) ?></span> </div>
                                    </td>
                                    <td>
                                        <div class="py-2"> <span class="d-block text-muted">Payment</span> <span> <?php se($orderVal, "payment_method", true) ?></span> </div>
                                    </td>
                                    <td>
                                        <div class="py-2"> <span class="d-block text-muted">Shipping Address</span> <span> <?php se($orderVal, "address", true) ?></span> </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="product border-bottom table-responsive">
                        <table class="table table-borderless">
                            <thead>
                                <th>Image</th>
                                <th>Product Details</th>
                                <th>Price</th>
                            </thead>
                            <tbody>

                            <?php foreach ($orderList as $row) : ?>
                                <?php
                                    $subItemTotal = 0;
                                    $itemUnit = (float)se($row, "unit_price", 0, false);
                                    $itemQuantity = (float)se($row, "quantity", 0, false);
                                    $subItemTotal = $itemUnit * $itemQuantity;
                                ?>
                                <tr>
									<td width="20%"> <a href="product.php?id=<?php se($row, "product_id", false)?>"> <img src="<?php se($row, "image", false);?>"  width="90"/> </a> </td>

                                    <td width="60%"> <span class="font-weight-bold"> <?php se($row, "name", false) ?></span>
                                        <div class="product-qty"> 
                                            <span class="d-block">Quantity: <?php se($row, "quantity", false)?></span> 
                                            <span>Unit Price:  $<?php se($row, "unit_price", false) ?></span> 
                                        </div>
                                    </td>
                                    <td width="20%">
                                        <div class="text-right"> <span class="font-weight-bold"> $<?php se($subItemTotal, false) ?> </span> </div>
                                    </td>
                                </tr>

                            <?php endforeach; ?>
								<tr>
                                    <td width="20%"><h5>Total</h5> </td>
                                    <td width="60%">
                                        
                                    </td>
                                    <td width="20%">
                                        <div class="text-right"> <span class="font-weight-bold"> $<?php se($totalFormatted, false)?></span> </div>
                                    </td>
                                </tr>
								<tr>
                                    <td width="20%"><h6>Money Received: </h6> </td>
                                    <td width="60%">
                                        
                                    </td>
                                    <td width="20%">
                                        <div class="text-right"> <span class="font-weight-bold">$<?php se($moneyPaidFormatted, false) ?></span> </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="font-weight-bold mb-0">Thanks for shopping with us!</p> <span>Rushh</span>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>