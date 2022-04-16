<?php
//note we need to go up 1 more directory
require(__DIR__ . "/../../partials/nav.php");
$TABLE_NAME = "Products";

//get the table definition
$result = [];
$columns = get_columns($TABLE_NAME);
//echo "<pre>" . var_export($columns, true) . "</pre>";
$ignore = ["id", "modified", "created"];
$db = getDB();
//get the item
$id = se($_GET, "id", -1, false);
$stmt = $db->prepare("SELECT * FROM $TABLE_NAME where id =:id");
try {
    $stmt->execute([":id" => $id]);
    $r = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($r) {
        $result = $r;
    }
} catch (PDOException $e) {
    error_log(var_export($e, true));
    flash("Error looking up record", "danger");

}

//If user is not an admin and tries to access a product that is not visible then it redirects them back to shop page
if (!has_role("Admin") && $result['visibility'] == 0) {
    flash("You don't have permission to view this page", "warning");
    die(header("Location: $BASE_PATH/shop.php"));
}
?>


<div class="container-fluid">
	<div class="row justify-content-center">
		<div style="max-width:70%">
			<div class="col mx-auto">
				<div class="card bg-light">
					<div class="card-header">
						<?php se($result, 'category')?>
					</div>
					<?php if (se($result, "image", "", false)) : ?>
						<img src="<?php se($result, "image"); ?>" class="card-img-top" alt="...">
					<?php endif; ?>

					<div class="card-body">
						<p class="card-title"> <strong>Name: </strong> <?php se($result, "name"); ?></p>
						<p class="card-text"> <strong>Description: </strong><?php se($result, "description"); ?></p>
						<p class="card-text"> <strong>Stock: </strong> <?php se($result, "stock"); ?> </p>
					</div>
					<div class="card-footer">
						Cost: <?php se($result, "unit_price"); ?>
						<button onclick="purchase('<?php se($result, 'id'); ?>')" class="btn btn-primary float-right">Buy Now</button>
						<?php if (has_role("Admin")): ?>
							<a href = "admin/edit_item.php?id=<?php se($result, "id"); ?>";` id="edit" class="btn btn-secondary float-right" >Edit</a>

						<?php endif; ?>
					</div>
				</div>
			</div>

		</div>
		
	</div>
    
</div>

<?php
//note we need to go up 1 more directory
require_once(__DIR__ . "/../../partials/flash.php");
?>