<?php
session_start();
include ('config.php');

if (isset($_POST['create-users'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = $connection->prepare("SELECT * FROM users WHERE email=:email");
    $query->bindParam("email", $email, PDO::PARAM_STR);
    $query->execute();

    if ($query->rowCount() > 0) {
        echo '<p class="error">The email address is already registered!</p>';
    }

    echo "+++ rowCount: ", $query->rowCount();
    echo "\n\n";

    if ($query->rowCount() == 0) {

        $query = $connection->prepare("INSERT INTO users(fullname, email, password) VALUES (:fullname, :email, :password)");

        $query->bindParam(':fullname', $fullname, PDO::PARAM_STR);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->bindParam(':password', $password, PDO::PARAM_STR);

        $result = $query->execute();

        if ($result) {
            echo '<p class="success">Your registration was successful!</p>';
        } else {
            echo '<p class="error">Something went wrong!</p>';
        }
    }
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
	<h2>MANAGE USER</h2>
	<form method="post" action="" name="signup-form">
		<div class="form-element">
			<label>Fullname</label> <input type="text" name="fullname" required />
		</div>
		<div class="form-element">
			<label>Email</label> <input type="email" name="email" required />
		</div>
		<div class="form-element">
			<label>Password</label> <input type="password" name="password"
				required />
		</div>
		
		<div class="form-element">
			<button type="submit" name="create-user" value="create-user">Create
				User</button>
		</div>
		
		<div class="form-element">
			<button type="submit" name="update-user" value="update-user">Update
				User</button>
		</div>
		
		<div class="form-element">
			<button type="submit" name="delete-user" value="delete-user">Delete
				User</button>
		</div>
		
		<div class="form-element">

			<table id="t01">
				<tr>
					<th>Full name</th>
					<th>Email</th>
					<th>password</th>
				</tr>

		<?php

$query = $connection->prepare("SELECT * FROM users");
$query->execute();
foreach ($query as $value) {

    $tableCol1 = '<tr>
    <td>' . $value['fullname'] . '</td>';
    $tableCol2 = '<td>' . $value['email'] . '</td>';
    $tableCol3 = '<td>' . $value['password'] . '</td> </tr>';

    echo $tableCol1 . $tableCol2 . $tableCol3;
}

?>
			</table>

		</div>
	</form>
</body>
</html>
