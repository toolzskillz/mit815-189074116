<?php
session_start();
include ('config.php');
if (isset($_POST['users'])) {
    header('Location: manage-users.php');
}
if (isset($_POST['class'])) {
    header('Location: manage-class.php');
}
if (isset($_POST['venues'])) {
    header('Location: manage-venues.php');
}

if (isset($_POST['logout-admin'])) {
    header('Location: login.php');
    exit();
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

	<h2>Administrator Dashboard</h2>
	<form method="post" action="" name="admin-dashboard">

		<div class="form-element">
			<button type="submit" name="users" value="users">Manage Users</button>
		</div>

		<div class="form-element">
			<button type="submit" name="class" value="class">Manage Class</button>
		</div>

		<div class="form-element">
			<button type="submit" name="venues" value="venues">Manage Venues</button>
		</div>


		<div class="form-element">
			<button class="redbutton" type="submit" name="logout-admin"
				value="logout-admin">Log Out</button>
		</div>
	</form>

</body>
</html>