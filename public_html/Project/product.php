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

$stmt = $db->prepare("SELECT user_id, product_id, rating, comment, Users.email, Users.username, Users.visibility  from Ratings
JOIN Users on user_id = Users.id
WHERE product_id = :product_id LIMIT 10 ");
$ratings = [];

try {
	$stmt->execute([":product_id" => $id]);
	$r = $stmt->fetchAll(PDO::FETCH_ASSOC);
	if ($r) {
		$ratings = $r;
	}
} catch (PDOException $e) {
	error_log(var_export($e, true));
	flash("Error fetching records", "danger");
}

$stmt = $db->prepare("SELECT * FROM OrderItems WHERE user_id = :user_id AND product_id = :product_id");
$purchaseArr = [];
try{
	$stmt->execute([":user_id" => get_user_id(), ":product_id" => $id]);
	$r = $stmt->fetchAll(PDO::FETCH_ASSOC);
	if ($r) {
		$purchaseArr = $r;
	}
} catch (PDOException $e) {
	error_log(var_export($e, true));
	flash("Error fetching purchase records", "danger");	
}


if(isset($_POST['rating']) && isset($_POST['review'])) {
	echo(var_export($_POST, true));
	$productid = se($_GET, "id", -1, false);
	$userid = get_user_id();

	$rating = $_POST['rating'];
	$review = $_POST['review'];

	$stmt = $db->prepare("INSERT INTO Ratings (	`product_id`, `user_id`, `rating`, `comment`) VALUES(:product_id, :user_id, :rating, :comment)");
	try {
		$stmt->execute([":product_id" => $productid, ":user_id" => $userid, ":rating" => $rating, ":comment" => $review]);
		flash("Successfully rated!", "success");
	} catch (Exception $e) {
		flash("Please rate the product again!", "danger");
	}


}
?>


<div class="container-fluid">

	<div class="row">
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
						<a href="shop.php" class="btn btn-primary float-right">Shop page</a>
						<?php if (has_role("Admin")): ?>
							<a href = "admin/edit_item.php?id=<?php se($result, "id"); ?>";` id="edit" class="btn btn-secondary float-right" >Edit</a>

						<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="col mx-auto">
				<div class="card">
					<div class="card-header">
						<h3>Write a Review!</h3>
					</div>
					<form method="POST" onsubmit="return validate(this);">
						<div class="form-group">
							<h4 class="text-center">Star rating</h4>
							<div class="rating" style="margin: 10px">
								<input selected = "true" type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
								<input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
								<input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
								<input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
								<input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
							</div>

						</div>
						<textarea style="margin:5px;" class="form-control" id="review" name= "review" rows="3"></textarea>
						
						<?php if(count($purchaseArr) > 0): ?>
							<div width="fill" class="text-center">
								<input type="submit" class="btn btn-primary " value="Submit" name="save" />
							</div>
						<?php else: ?>
							<div width="auto" class="text-center">
								<b>Please purchase this item in order to review</b>
							</div>

						<?php endif; ?>

						
				
				
					</form>
				</div>
			
			</div>

		
	</div>
	<hr>

	<div class="row justify-content-center">
		<div style="max-width:70%">
			<div class="col mx-auto">
				<div class="card">
					<div class="card-header text-center">
						<h3>Ratings</h3>
					</div>
					<div class="card-body">
						<?php if (count($ratings) == 0) : ?>
							<p>No ratings to show</p>
						<?php else : ?>
								<?php foreach ($ratings as $userRating) : ?>
									<?php if($userRating['visibility'] == 0):?>
										<p> <b> User: </b>  Anonymous </p>	
									<?php else: ?>
										<p> <b> User: </b>  <?php se($userRating, "email", false); ?> </p>
									<?php endif; ?>
				
									
									<p> <b>Rating: </b> <?php se($userRating, "rating", false); ?> Stars</p>
									<p> <b>Comment: </b><?php se($userRating, "comment", false); ?> </p>

									<hr>
									
								<?php endforeach; ?>
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