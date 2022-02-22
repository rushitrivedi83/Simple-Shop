<?php 
	require(__DIR__ . "/../../lib/functions.php")
?>

<form onsubmit="return validate(this)" method="POST">
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" required />
    </div>
    <div>
        <label for="pw">Password</label>
        <input type="password" id="pw" name="password" required minlength="8" />
    </div>
    <div>
        <label for="confirm">Confirm</label>
        <input type="password" name="confirm" required minlength="8" />
    </div>
    <input type="submit" value="Register" />
</form>
<script>
    function validate(form) {
        //TODO 1: implement JavaScript validation
        //ensure it returns false for an error and true for success
		
        return true;
    }
</script>
<?php
 //TODO 2: add PHP Code
 if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm'])) {
	 $email = safer_echo($_POST, "email", "", false);
	 $password =  safer_echo($_POST, "password", "", false);
	 $confirm =  safer_echo($_POST, "confirm", "", false);


	 $hasError = false;

	 if(empty($email)) {
		 echo "Email must be set <br>";
		 $hasError = true;
	 }
	 //TODO 3: Sanitize email & Validate Email
	 $email = filter_var($email, FILTER_SANITIZE_EMAIL);
	 if(!filter_var($email, FILTER_SANITIZE_EMAIL)) {
		 echo "Email is invalid <br>";
		 $hasError = true;
	 }

	 if(empty($password)) {
		echo "Password must be set <br>";
		$hasError = true;
	}
	if(empty($confirm)) {
		echo "Confirm Password must be set <br>";
		$hasError = true;
	}

	if(strlen($password) < 8) {
		echo "Password must be >=8 chars <br>";
		$hasError = true;
	}

	if(strlen($password) > 0 && $password !== $confirm) {
		echo "Passwords must match <br>";
		$hasError = true;
	}

	if(!$hasError) {
		echo "Welcome, $email <br>";

		$hash = password_hash($password, PASSWORD_BCRYPT);
        $db = getDB();
        $stmt = $db->prepare("INSERT INTO Users (email, password) VALUES(:email, :password)");
        try {
            $stmt->execute([":email" => $email, ":password" => $hash]);
            echo "Successfully registered! <br>";
        } catch (Exception $e) {
            echo "There was a problem registering";
            echo "<pre>" . var_export($e, true) . "</pre>";
        }
	}
 }
?>