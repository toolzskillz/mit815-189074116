<?php
session_start();
include ('config.php');
if (isset($_POST['logout-user'])) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>User</title>
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

button.nav-element {
	padding: 10px;
	font-size: 1.5rem;
	font-family: 'Lato';
	font-weight: 100;
	background: red;
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

	<h2>Hello, Mr/Mrs</h2>
	<form method="post" action="" name="users-dashboard">
		<div class="form-element">
			<button class="nav-element" type="submit" name="logout-user"
				value="logout-user">Log Out</button>
		</div>
	</form>

</body>
</html>