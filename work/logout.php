<?php	
	include('server.php');

	if (session_destroy()) {
		header("location: login.php");

			}


?>