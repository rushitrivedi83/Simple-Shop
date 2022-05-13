<?php
//note we need to go up 1 more directory
require(__DIR__ . "/../../../partials/nav.php");
$TABLE_NAME = "RM_Items";
if (!has_role("Admin")) {
    flash("You don't have permission to view this page", "warning");
    die(header("Location: $BASE_PATH/home.php"));
}

$results = [];
$db = getDB();
if (isset($_POST["itemName"])) {
    
    $stmt = $db->prepare("SELECT id, name, description, stock, unit_price, image, visibility from Products WHERE name like :name LIMIT 50");
    try {
        $stmt->execute([":name" => "%" . $_POST["itemName"] . "%"]);
        $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($r) {
            $results = $r;
        }
    } catch (PDOException $e) {
        error_log(var_export($e, true));
        flash("Error fetching records", "danger");
    }
} else {
    $stmt = $db->prepare("SELECT id, name, description, stock, unit_price, image, visibility from Products LIMIT 50");
    try {
        $stmt->execute([]);
        $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($r) {
            $results = $r;
        }
    } catch (PDOException $e) {
        error_log(var_export($e, true));
        flash("Error fetching records", "danger");
    }
}
?>


<div class="container-fluid">
    <h1>List Items</h1>
    <form method="POST" class="row row-cols-lg-auto g-3 align-items-center">
        <div class="input-group mb-3">
            <input class="form-control" type="search" name="itemName" placeholder="Item Filter" />
            <input class="btn btn-primary" type="submit" value="Search" />
        </div>
    </form>
    <?php if (count($results) == 0) : ?>
        <p>No results to show</p>
    <?php else : ?>
        <table class="table">
            <?php foreach ($results as $index => $record) : ?>
                <?php if ($index == 0) : ?>
                    <thead>
                        <?php foreach ($record as $column => $value) : ?>
                            <th><?php se($column); ?></th>
                        <?php endforeach; ?>
                        <th>Actions</th>
                    </thead>
                <?php endif; ?>
                <tr>
                    <?php foreach ($record as $column => $value) : ?>
                        <?php if ($column != "name"): ?>
                            <td><?php se($value, null, "N/A"); ?></td>
                        <?php endif; ?>
                        <?php if ($column == "name"): ?>
                            <td> <a  href= "<?php se($BASE_PATH) ?>/product.php?id=<?php se($record, "id"); ?>"> <?php se($value, null, "N/A"); ?> </a></td>
                        <?php endif; ?>
                    <?php endforeach; ?>


                    <td>
                        <a class ="btn btn-primary" href="edit_item.php?id=<?php se($record, "id"); ?>">Edit</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</div>



<?php


//note we need to go up 1 more directory
require_once(__DIR__ . "/../../../partials/flash.php");