<?php
session_start();
include ('config.php');
if (isset($_POST['create-class'])) {
    // $fullname = $_POST['fullname'];
    // $email = $_POST['email'];
    // $password = $_POST['password'];

    // $query = $connection->prepare("SELECT * FROM users WHERE email=:email");
    // $query->bindParam("email", $email, PDO::PARAM_STR);
    // $query->execute();

    // if ($query->rowCount() > 0) {
    // echo '<p class="error">The email address is already registered!</p>';
    // }

    // echo "+++ rowCount: ", $query->rowCount();
    // echo "\n\n";

    // if ($query->rowCount() == 0) {

    // $query = $connection->prepare("INSERT INTO users(fullname, email, password) VALUES (:fullname, :email, :password)");

    // $query->bindParam(':fullname', $fullname, PDO::PARAM_STR);
    // $query->bindParam(':email', $email, PDO::PARAM_STR);
    // $query->bindParam(':password', $password, PDO::PARAM_STR);

    // $result = $query->execute();

    // if ($result) {
    // echo '<p class="success">Your registration was successful!</p>';
    // } else {
    // echo '<p class="error">Something went wrong!</p>';
    // }
    // }
} else if (isset($_POST['update-class'])) {
    echo '<p class="error">Something went wrong!</p>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>SIGNUP</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<h2>MANAGE CLASS</h2>
	<form method="post" action="" name="signup-form">
		<div class="form-element">
			<label>Title</label> <input type="text" name="title"
				pattern="[a-zA-Z0-9]+" required />
		</div>

		<div class="form-element">
			<label>Date</label> <input type="date" id="birthday" name="birthday">
		</div>

		<div class="form-element">
			<label>Period</label> <select required name="period" id="period">
				<option value="volvo">30mins</option>
				<option value="saab">1hr</option>
				<option value="mercedes">1hr 30mins</option>
				<option value="audi">2hrs</option>
			</select>
		</div>

		<div class="form-element">
			<label>Maximum participants</label> <select required name="max"
				id="max">
				<option value="20">20</option>
				<option value="30">30</option>
				<option value="40">40</option>
				<option value="50">50</option>
			</select>
		</div>

		<div class="form-element">
			<label>Venue</label> <select required name="max" id="max">
				<option value="E303">E303</option>
				<option value="E304">E304</option>
			</select>
		</div>

		<div class="form-element">
			<button type="submit" name="create-class" value="create-class">Create
				Class</button>
		</div>

		<div class="form-element">
			<button type="submit" name="update-class" value="update-class">Update
				Class</button>
		</div>

	</form>
</body>
</html>
