<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<div class="container">
		<img src="image/login.png"/>
		<div class="header">
			
			<h2>Register</h2>

		</div>

		<form action="registration.php" method="post">
		
		<?php include('errors.php'); ?>

			<div class="form-input">
				
				<label for="username"></label>
				<input type="text" placeholder="Enter your username" name="username" required>

			</div>

			<div class="form-input">
				
				<label for="email"> </label>
				<input type="email" placeholder="Enter your email" name="email" required>

			</div>

			<div class="form-input">
				
				<label for="password"></label>
				<input type="password" placeholder="Enter your password" name="password_1" required>

			</div>

			<div class="form-input">
				
				<label for="password"></label>
				<input type="password" placeholder="Please confirm your password" name="password_2" required>

			</div>

			<button type="submit" name="reg_user">Submit </button>

			<p>Already a user? <a href="login.php"> <b>Log in </b> </a> </p>

		</form>

	</div>

</body>
</html>