<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);



$user_id = (int)se($_GET, "id", get_user_id(), false);
$isMe = $user_id == get_user_id();
$isEdit = isset($_GET["edit"]);

$db = getDB();
?>
<?php
if (isset($_POST["save"]) && $isMe && $isEdit) {
    $email = se($_POST, "email", null, false);
    $username = se($_POST, "username", null, false);
    $visibility = 0;
    if( isset($_POST["visibility"]) && $_POST["visibility"] == "on") {
        $visibility = 1;
    }
    $hasError = false;

    //sanitize
    $email = sanitize_email($email);
    //validate
    if (!is_valid_email($email)) {
        flash("Invalid email address", "danger");
        $hasError = true;
    }
    if (!is_valid_username($username)) {
        flash("Username must only contain 3-16 characters a-z, 0-9, _, or -", "danger");
        $hasError = true;
    }
    if (!$hasError) {
        $params = [":email" => $email, ":username" => $username, ":id" => get_user_id(), ":visibility" => $visibility];
        $stmt = $db->prepare("UPDATE Users set email = :email, username = :username, visibility = :visibility where id = :id");
        try {
            $stmt->execute($params);
            flash("Profile saved", "success");
        } catch (Exception $e) {
            users_check_duplicate($e->errorInfo);
        }
        //select fresh data from table
        $stmt = $db->prepare("SELECT id, email, username from Users where id = :id LIMIT 1");
        try {
            $stmt->execute([":id" => get_user_id()]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($user) {
                //$_SESSION["user"] = $user;
                $_SESSION["user"]["email"] = $user["email"];
                $_SESSION["user"]["username"] = $user["username"];
            } else {
                flash("User doesn't exist", "danger");
            }
        } catch (Exception $e) {
            flash("An unexpected error occurred, please try again", "danger");
            //echo "<pre>" . var_export($e->errorInfo, true) . "</pre>";
        }
    }   


    //check/update password
    $current_password = se($_POST, "currentPassword", null, false);
    $new_password = se($_POST, "newPassword", null, false);
    $confirm_password = se($_POST, "confirmPassword", null, false);
    if (!empty($current_password) && !empty($new_password) && !empty($confirm_password)) {
        $hasError = false;
        if (!is_valid_password($current_password)) {
            flash("Password too short", "danger");
            $hasError = true;
        }
        if (!$hasError) {
            if ($new_password === $confirm_password) {
                //TODO validate current
                $stmt = $db->prepare("SELECT password from Users where id = :id");
                try {
                    $stmt->execute([":id" => get_user_id()]);
                    $result = $stmt->fetch(PDO::FETCH_ASSOC);
                    if (isset($result["password"])) {
                        if (password_verify($current_password, $result["password"])) {
                            $query = "UPDATE Users set password = :password where id = :id";
                            $stmt = $db->prepare($query);
                            $stmt->execute([
                                ":id" => get_user_id(),
                                ":password" => password_hash($new_password, PASSWORD_BCRYPT)
                            ]);

                            flash("Password reset", "success");
                        } else {
                            flash("Current password is invalid", "warning");
                        }
                    }
                } catch (Exception $e) {
                    echo "<pre>" . var_export($e->errorInfo, true) . "</pre>";
                }
            } else {
                flash("New passwords don't match", "warning");
            }
        }
    }
}
?>

<?php
//select fresh data from table
$stmt = $db->prepare("SELECT id, email, username,visibility, created from Users where id = :id LIMIT 1");
$isVisible = false;
try {
    $stmt->execute([":id" => $user_id]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($user) {
        if ($isMe) {
            $_SESSION["user"]["email"] = $user["email"];
            $_SESSION["user"]["username"] = $user["username"];
        }
        if (se($user, "visibility", 0, false) > 0) {

            $isVisible = true;
        }
        $email = se($user, "email", "", false);
        $username = se($user, "username", "", false);
        $joined = se($user, "created", "", false);
    } else {
        flash("User doesn't exist", "danger");
    }
} catch (Exception $e) {
    flash("An unexpected error occurred, please try again", "danger");
    //echo "<pre>" . var_export($e->errorInfo, true) . "</pre>";
}


?>

<div class="container-fluid">
    <div class="align-items-centerr">
        <h1>Profile</h1>

        <?php if ($isMe && $isEdit) : ?>
            <?php if ($isMe) : ?>
                <a href="<?php echo get_url("profile.php"); ?>" class="btn btn-primary">View</a>
            <?php endif; ?>
            <form method="POST" onsubmit="return validate(this);">
                <div class="mb-3">
                    <label class="form-label" for="email">Email</label>
                    <input class="form-control" type="email" name="email" id="email" value="<?php se($email); ?>" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="username">Username</label>
                    <input class="form-control" type="text" name="username" id="username" value="<?php se($username); ?>" />
                </div>
                <div class="mb-3">
                    <div class="form-check form-switch">
                        <input <?php if ($isVisible) {
                                    echo "checked";
                                } ?> class="form-check-input" type="checkbox" role="switch" id="vis" name="vis">
                        <label class="form-check-label" for="vis">Toggle Visibility</label>
                    </div>
                </div>
                <!-- DO NOT PRELOAD PASSWORD -->
                <div class="mb-3">Password Reset</div>
                <div class="mb-3">
                    <label class="form-label" for="cp">Current Password</label>
                    <input class="form-control" type="password" name="currentPassword" id="cp" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="np">New Password</label>
                    <input class="form-control" type="password" name="newPassword" id="np" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="conp">Confirm Password</label>
                    <input class="form-control" type="password" name="confirmPassword" id="conp" />
                </div>
                <input type="submit" class="mt-3 btn btn-primary" value="Update Profile" name="save" />
            </form>
        <?php else : ?>
    
            <?php if ($isVisible || $isMe || has_role('admin')) : ?>
            Username: <?php se($username); ?>
            <div>
                Email: <?php se($email); ?>
            </div>
                <div>
                    Joined: <?php se($joined); ?>
                </div>
                </div>
            <?php else : ?>
                Profile is private
                <?php
                flash("Profile is private", "warning");
                redirect("home.php");
                ?>
            <?php endif; ?>
            <?php if ($isMe) : ?>
                <a href="?edit" class="btn btn-primary">Edit</a>
            <?php endif; ?>
    </div>
</div>
<?php endif; ?>


<script>
    function validate(form) {
        let pw = form.newPassword.value;
        let con = form.confirmPassword.value;
        let isValid = true;
        //TODO add other client side validation....
        //validate email
        if(!form.email.value.match( /(.+)@(.+){2,}\.(.+){2,}/g)) {
            flash("Please enter a valid email", "warning");
            isValid = false; 
        }
        //validate username
        if(!form.username.value.match( /[a-z_-]{3,16}/g)) {
            flash("Please enter a valid username", "warning");
            isValid = false;
        }

        //example of using flash via javascript
        //find the flash container, create a new element, appendChild

        if(pw.length > 0) {
            if(pw.length < 8) {
                flash("Please enter a password greater than 8 characters", "warning")
                isValid = false;
            }
            if (pw !== con) {
                flash("Password and Confirm password must match", "warning");
                isValid = false;
            }
        }
        
        return isValid;
    }
</script>
<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>