<?php
session_start();
include ('config.php');
if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email == "admin" and $password == "admin") {
        echo '<p class="success">Congratulations, you are logged in!</p>';
        header('Location: admin-dashboard.php');
        exit();
    } else {

        $query = $connection->prepare("SELECT * FROM users WHERE email=:email");
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->execute();

        if ($query->rowCount() == 0) {
            echo '<p class="error">Email not found!</p>';
        } else {

            $result = $query->fetch(PDO::FETCH_ASSOC);

            if ($password == $result['password']) {
                $_SESSION['user_id'] = $result['id'];
                header('Location: users-dashboard.php');
            } else {
                echo '<p class="error">Email/Password combination is wrong!</p>';
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>LOGIN</title>
<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
	<h2>LOGIN</h2>
	<form method="post" action="" name="signin-form">
		<div class="form-element">
			<label>Email</label> <input type="text" name="email" required />
		</div>

		<div class="form-element">
			<label>Password</label> <input type="password" name="password"
				required />
		</div>

		<button type="submit" name="login" value="login">Log In</button>
	</form>
</body>
</html>
