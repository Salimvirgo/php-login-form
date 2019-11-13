<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<?php include('navbar.php')?>
	<div class="container register">
		<img src="image/login.png"/>
		<div class="header">
			
			<h2>Register</h2>

		</div>

	<div class="input-fields">
	<form action="registration.php" method="post" class="reg">
		
		<?php include('errors.php'); ?>

			<div class="form-input register">
				
				<label for="username">Username</label>
				<input type="text" placeholder="Username....." name="username" required>

			</div>

			<div class="form-input register">
				
				<label for="email">Email</label>
				<input type="email" placeholder="Email....." name="email" required>

			</div>

			<div class="form-input register">
				
				<label for="password">Password</label>
				<input type="password" placeholder="Enter Password" name="password_1" required>

			</div>

			<div class="form-input register">
				
				<label for="password">Confirm Password</label>
				<input type="password" placeholder="Confirm Password" name="password_2" required>

			</div>

			<button type="submit" name="reg_user">Submit </button>

			<p>Already a user? <a href="login.php"> <b>Log in </b> </a> </p>

		</form>
	</div>

	</div>

</body>
</html>
