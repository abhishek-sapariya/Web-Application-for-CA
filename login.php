		<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login of Admin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header">
		<h2>Admin Login</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>username</label>
			<input type="text" name="username" required>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password" id="password" required>
		</div>

		<div class="input-group">
			<button type="submit" class="btn" name="login_user" id="login_user">Login</button>
		</div>
	</form>


</body>
</html>