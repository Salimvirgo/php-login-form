<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>LOG IN</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<div class="container">

	<img src="image/login.png"/>

		<div class="header">
			
			<h2>Log in </h2>

		</div>
		
		<form action="login.php" method="post">
			
			<div class="form-input">
				
				<label for="username"></label>
				<input type="text" placeholder="Enter your username" name="username" required>

			</div>


			<div class="form-input">
				
				<label for="password"></label>
				<input type="password" placeholder="Enter your password" name="password_1" required>

			</div>


			<button type="submit" name="login_user">Log in</button>

			<p>Not a user? <a href="registration.php"> <b>Sign up </b> </a> </p>

			
		</form>

	</div>

</body>
</html>