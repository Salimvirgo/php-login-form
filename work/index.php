<?php 
	include('server.php');

	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<div class="header">
		<h1>Welcome to my Homepage</h1>

	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		<!-- logged in user information -->
		<div class="profile_info">
		

			<div>
				<?php  if (isset($_SESSION['username'])) : ?>
					<strong><?php echo $_SESSION['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['username']); ?>)</i> 
						<br>
						<a href="logout.php" style="color: red;" >logout</a>
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>
</body>
</html>