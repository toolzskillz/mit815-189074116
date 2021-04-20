<?php
session_start();
include ('config.php');
if (isset($_POST['create-venue'])) {
    // $fullname = $_POST['fullname'];
    // $email = $_POST['email'];
    // $password = $_POST['password'];
    // $password_hash = password_hash($password, PASSWORD_BCRYPT);
    // $query = $connection->prepare("SELECT * FROM users WHERE email=:email");
    // $query->bindParam("email", $email, PDO::PARAM_STR);
    // $query->execute();
    // if ($query->rowCount() > 0) {
    // echo '<p class="error">The email address is already registered!</p>';
    // }
    // if ($query->rowCount() == 0) {
    // $query = $connection->prepare("INSERT INTO users(fullname,password,email) VALUES (:fullname,:password_hash,:email)");
    // $query->bindParam("fullname", $fullname, PDO::PARAM_STR);
    // $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
    // $query->bindParam("email", $email, PDO::PARAM_STR);
    // $result = $query->execute();
    // if ($result) {
    // echo '<p class="success">Your registration was successful!</p>';
    // } else {
    // echo '<p class="error">Something went wrong!</p>';
    // }
    // }
} else if (isset($_POST['logout'])) {
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>SIGNUP</title>
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
	<h2>MANAGE VENUES</h2>
	<form method="post" action="" name="signup-form">
		<div class="form-element">
			<label>Venue: </label> <input type="text" name="fullname"
				pattern="[a-zA-Z0-9]+" required />
		</div>
		<div class="form-element">
			<button type="submit" name="create-venue" value="create-venue">Create
				Venue</button>
		</div>
	</form>
</body>
</html>
