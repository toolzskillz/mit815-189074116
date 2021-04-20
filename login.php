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
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<style type="text/css">
* {
	padding: 0;
	margin: 0;
	box-sizing: border-box;
}

body {
	margin: 50px auto;
	text-align: center;
	width: 800px;
}

h1 {
	font-family: 'Passion One';
	font-size: 2rem;
	text-transform: uppercase;
}

label {
	width: 150px;
	display: inline-block;
	text-align: left;
	font-size: 1.5rem;
	font-family: 'Lato';
}

input {
	border: 2px solid #ccc;
	font-size: 1.5rem;
	font-weight: 100;
	font-family: 'Lato';
	padding: 10px;
}

form {
	margin: 25px auto;
	padding: 20px;
	border: 5px solid #ccc;
	width: 500px;
	background: #eee;
}

div.form-element {
	margin: 20px 0;
}

button {
	padding: 10px;
	font-size: 1.5rem;
	font-family: 'Lato';
	font-weight: 100;
	background: blue;
	color: white;
	width: 300px;
	border: none;
}

p.success, p.error {
	color: white;
	font-family: lato;
	background: yellowgreen;
	display: inline-block;
	padding: 2px 10px;
}

p.error {
	background: orangered;
}
</style>
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
