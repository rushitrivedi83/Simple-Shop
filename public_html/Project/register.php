<?php
require(__DIR__ . "/../../partials/nav.php");
reset_session();
?>
<div class = "form-container">
    <form class="register-form" onsubmit="return validate(this)" method="POST">
        <h2 style="padding-bottom: 20px"> Register </h2>
        <div>
            <label for="email">Email</label>
            <br>
            <input type="email" name="email" required />
        </div>
        <div>
            <label for="username">Username</label>
            <br>
            <input type="text" name="username" required maxlength="30" />
        </div>
        <div>
            <label for="pw">Password</label>
            <br>
            <input type="password" id="pw" name="password" required minlength="8" />
        </div>
        <div>
            <label for="confirm">Confirm</label>
            <br>
            <input type="password" name="confirm" required minlength="8" />
        </div>
        <input type="submit" value="Register" />
    </form>

    
</div>

<script>
    function validate(form) {
        //TODO 1: implement JavaScript validation
        //ensure it returns false for an error and true for success
        let isValid = true
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

        //validate password length
        if(form.password.value.length < 8 || form.confirm.value.length < 8) {
            flash("Please enter a password greater than 8 characters", "warning");
            isValid = false;
        }
        //validate both passowrd length matches
        if(form.password.value != form.confirm.value) {
            flash("Please enter matching passwords", "warning");
            isValid = false;
        }
        
        return isValid;
    }
</script>
<?php
//TODO 2: add PHP Code
if (isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["confirm"])) {
    $email = se($_POST, "email", "", false);
    $password = se($_POST, "password", "", false);
    $confirm = se(
        $_POST,
        "confirm",
        "",
        false
    );
    $username = se($_POST, "username", "", false);
    //TODO 3
    $hasError = false;
    if (empty($email)) {
        flash("Email must not be empty", "danger");
        $hasError = true;
    }
    //sanitize
    $email = sanitize_email($email);
    //validate
    if (!is_valid_email($email)) {
        flash("Invalid email address", "danger");
        $hasError = true;
    }
    if (!preg_match('/^[a-z0-9_-]{3,16}$/', $username)) {
        flash("Username must only contain 3-30 characters a-z, 0-9, _, or -", "danger");
        $hasError = true;
    }
    if (empty($password)) {
        flash("password must not be empty", "danger");
        $hasError = true;
    }
    if (empty($confirm)) {
        flash("Confirm password must not be empty", "danger");
        $hasError = true;
    }
    if (strlen($password) < 8) {
        flash("Password too short", "danger");
        $hasError = true;
    }
    if (
        strlen($password) > 0 && $password !== $confirm
    ) {
        flash("Passwords must match", "danger");
        $hasError = true;
    }
    if (!$hasError) {
        //TODO 4
        $hash = password_hash($password, PASSWORD_BCRYPT);
        $db = getDB();
        $stmt = $db->prepare("INSERT INTO Users (email, password, username) VALUES(:email, :password, :username)");
        try {
            $stmt->execute([":email" => $email, ":password" => $hash, ":username" => $username]);
            flash("Successfully registered!", "success");
        } catch (Exception $e) {
            users_check_duplicate($e->errorInfo);
        }
    }
}
?>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>