<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Single Payment</title>
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<style type="text/css">
body {
	font: 14px sans-serif;
}

.wrapper {
	width: 750px;
	padding: 20px;
}
</style>
</head>
<body>
	<div class="wrapper">
		<h2>Single Payment</h2>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
			method="post">
<div>
				<label>URL</label> <input type="text" name="url"
					class="form-control" value="<?php echo $credentials->url ; ?>">
			</div>
			<div>
				<label>Merchant Id</label> <input type="text" name="merchantid"
					class="form-control"
					value="<?php echo $credentials->merchantId ; ?>">
			</div>
			<div>
				<label>Api key</label> <input type="text" name="apikey"
					class="form-control" value="<?php echo $credentials->apiKey ; ?>">
			</div>
			<div>
				<label>Api Token</label> <input type="text" name="apitoken"
					class="form-control" value="<?php echo $credentials->apiToken ; ?>">
			</div>
			<div>
				<label>Vector</label> <input type="text" name="iv"
					class="form-control" value="<?php echo $credentials->iv ; ?>">
			</div>
			<div>
				<label>Key</label> <input type="text" name="key"
					class="form-control" value="<?php echo $credentials->key ; ?>">
			</div>
			<br>


			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Test Single Payment">
			</div>
		</form>
	</div>
</body>
</html>