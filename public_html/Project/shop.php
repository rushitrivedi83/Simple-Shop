<?php
require(__DIR__ . "/../../partials/nav.php");

$results = [];
$db = getDB();
//get all categories
$stmt = $db->prepare("SELECT DISTINCT category from Products");
$stmt->execute();
$categories = $stmt->fetchAll();


//process filters/sorting
//Sort and Filters
$col = se($_GET, "col", "unit_price", false);
$cat = se($_GET, "category", "all", false);
$stock = se($_GET, "stock", "inStock", false);




//allowed list
if (!in_array($col, ["unit_price", "stock", "name", "created", "avg_rating"])) {
    $col = "unit_price"; //default value, prevent sql injection
}


if($stock == "outofstock") {
    if(!has_role("Admin")) {
        flash("You don't have permission to view this page", "warning");
        die(header("Location: $BASE_PATH/shop.php"));
     
    }
}

$order = se($_GET, "order", "asc", false);
//allowed list
if (!in_array($order, ["asc", "desc"])) {
    $order = "asc"; //default value, prevent sql injection
}
//get name partial search
$name = se($_GET, "name", "", false);

//split query into data and total
$base_query = "SELECT id, name, description, unit_price, stock, category, avg_rating, image FROM Products";
$total_query = "SELECT count(1) as total FROM Products";
//dynamic query
$query = " WHERE 1=1 and visibility > 0 "; //1=1 shortcut to conditionally build AND clauses
if($stock == "outofstock") {
    $query = $query . "and stock = 0"; 
} else {
    $query = $query . "and stock > 0"; 
}

$params = []; //define default params, add keys as needed and pass to execute

//apply category filter
if(!empty($cat) && $cat != "all") {
    $query .= " AND category = :category";
    $params[":category"] = $cat; 
} 
//apply name filter
if (!empty($name)) {
    $query .= " AND name like :name";
    $params[":name"] = "%$name%";
}
//apply column and order sort
if (!empty($col) && !empty($order)) {
    $query .= " ORDER BY $col $order"; //be sure you trust these values, I validate via the in_array checks above
}
//paginate function
$per_page = 6;
paginate($total_query . $query, $params, $per_page);

$query .= " LIMIT :offset, :count";
$params[":offset"] = $offset;
$params[":count"] = $per_page;
//get the records
$stmt = $db->prepare($base_query . $query); //dynamically generated query
//we'll want to convert this to use bindValue so ensure they're integers so lets map our array
foreach ($params as $key => $value) {
    $type = is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR;
    $stmt->bindValue($key, $value, $type);
}
$params = null; //set it to null to avoid issues

try {
    $stmt->execute($params); //dynamically populated params to bind
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($r) {
        $results = $r;
    }
} catch (PDOException $e) {
   echo(var_export($e, true));
    flash("Error fetching items", "danger");
}
?>
<script>
    function purchase(item) {
        console.log("TODO purchase item", item);
        //alert("It's almost like you purchased an item, but not really");category
        if(add_to_cart) {
            add_to_cart(item);
        }
    }
</script>

<div class="container-fluid">
    <h1>Shop</h1>
    <!-- Matt's Form-->
    <form class="row row-cols-auto g-3 align-items-center">
        <div class="col">
            <div class="input-group" data="i">
                <div class="input-group-text">Name</div>
                <input class="form-control" name="name" value="<?php se($name); ?>" />
            </div>
        </div>
        <div class="col">
            <div class="input-group">
                <div class="input-group-text">Sort</div>
                <!-- make sure these match the in_array filter above-->
                <select class="form-control bg-info" style="width: auto;" name="col" value="<?php se($col); ?>" data="took">
                    <option value="unit_price">Cost</option>
                    <option value="stock">Stock</option>
                    <option value="name">Name</option>
                    <option value="created">Created</option>
                    <option value="avg_rating">Rating</option>

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
            
                <div class="input-group-text">Filter</div>
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

                <?php if (has_role("Admin")): ?>
                     <!--- Select categories -->
                    <select class="form-control" style="width:auto;background:#178a94;" name="stock" value="<?php se($cat);?>">
                        <option value="inStock">In Stock</option>
                        <option value="outofstock">Out of Stock</option>
                     
                    </select>
                    <script data="this">
                        document.forms[0].stock.value = "<?php se($stock); ?>";
                    </script>

                <?php endif; ?>


            </div>
        </div>
        <div class="col">
            <div class="input-group">
                <input type="submit" class="btn btn-primary" value="Apply" />
            </div>
        </div>
    </form>
    <!-- end form -->
    <div class="row">
        <div class="col">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 g-4">
                <?php foreach ($results as $item) : ?>
                    <div class="col">
                        <div class="card bg-light h-100">
                            <div class="card-header">
                                <?php se($item, 'category')?>
                            </div>
                            <a href= "product.php?id=<?php se($item, "id"); ?>"> 
                                <?php if ( se($item, "image", "", false)) : ?>
                                    <img src="<?php se($item, "image"); ?>" style="width: 100%; height: 15vw; object-fit: cover;" class="card-img-top" >
                                <?php else: ?>
                                    <img src="https://www.suzukijember.com/gallery/gambar_product/default.jpg" style="width: 100%; height: 15vw; object-fit: cover;"class="card-img-top" alt="banner">
                                <?php endif;?>
                            </a>
                            <?php $rating = number_format($item['avg_rating'], 2);?>
                         
                            <div class="card-body">
                                <p class="card-title"> <b>Name: </b> <?php se($item, "name"); ?> </p>
                                <p class="card-text"> <b>Description: </b><?php se($item, "description"); ?></p>
                                <p class="card-text"> <b>Rating: </b><?php se($rating);?> / 5.00</p>
                            </div>
                           
                            <div class="card-footer" style="size: auto">
                                <b>Cost: </b> $<?php se($item, "unit_price"); ?>
                                <br>
                                <button onclick="purchase('<?php se($item, 'id'); ?>')" class="btn btn-primary">Add to Cart</button>
                                <?php if (has_role("Admin")): ?>
                                 <a href = "admin/edit_item.php?id=<?php se($item, "id"); ?>";` id="edit" class="btn btn-secondary" >Edit</a>

                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="mt-3">
                <?php /* added pagination */ ?>
                <?php require(__DIR__ . "/../../partials/pagination.php"); ?>
            </div>
        </div>
        <div class="col-4" style="min-width:30em">
            <?php require(__DIR__ . "/../../partials/cart.php"); ?>
        </div>
    </div>
</div>

<?php
require(__DIR__ . "/../../partials/flash.php");
?>