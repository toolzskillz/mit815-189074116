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
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<h2>Hello, Mr/Mrs</h2>
	<form method="post" action="" name="users-dashboard">
		<div class="form-element">
			<button class="nav-element" type="submit" name="logout-user"
				value="logout-user">Log Out</button>
		</div>
		
		<div class="form-element">
			<table id="t01">
				<tr>
					<th>Class</th>
					<th>Venue</th>
					<th>Period</th>
				</tr>
				<tr>
					<td>MIT 815</td>
					<td>E303</td>
					<td>10 AM (2hrs)</td>
				</tr>
			</table>
		</div>
	</form>

</body>
</html>