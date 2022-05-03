<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);

$user_id = get_user_id();
$db = getDB();
$results = [];


if (has_role("Admin")) {
    $stmt = $db->prepare(
        "SELECT id as 'Order ID', user_id as 'User ID', created as 'Order Placed', total_price as Cost, address as 'Address', payment_method as 'Payment Method' , money_received as 'Payment Received'
        FROM Orders 
        ORDER BY Orders.id DESC
        LIMIT 10"
    );
    try {
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        error_log("Error getting orders for admin or shop owner" . var_export($e, true));
        $db->rollback();
    }
} else {
    $stmt = $db->prepare(
        "SELECT id as 'Order ID', user_id as 'User ID', created as 'Order Placed', total_price as Cost, address as 'Address', payment_method as 'Payment Method' , money_received as 'Payment Received'
        FROM Orders
        WHERE user_id = :uid
        ORDER BY Orders.id DESC
        LIMIT 10"
    );
    try {
        $stmt->execute([":uid" => $user_id]);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        error_log("Error getting orders for user" . var_export($e, true));
    }

}



?>

<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-12">
            <div class="card">
				<br>
				<h1 style="padding-left: 30px">Purchase History</h1> <br>
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
										<th><?php se($column); ?></th>
									<?php endforeach; ?>
									<th>Order Details</th>
								</thead>
							<?php endif; ?>
							<tr>
								<?php foreach ($record as $column => $value) : ?>
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
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>