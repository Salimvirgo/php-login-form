<?php

session_start();

//initialising variables

$username = "";
$email = "";

$errors = array();

//connect to db

$db = mysqli_connect('localhost','root','root','project') or die("could not connect to database");

if (isset($_POST['reg_user'])) {
		register();
	}

if (isset($_POST['login_user'])) {
		login();
}
	
if(isset($_POST['logout'])){

	session_destroy();
	unset($_SESSION['username']);
	header("location : login.php");
}
//Register users
function register(){
 global $errors, $db;

$username = ($_POST['username']);
$email = ( $_POST['email']);
$password_1 =  ( $_POST['password_1']);
$password_2 =  ( $_POST['password_2']);

//Form validation

if(empty($username)) {array_push($errors, "Username is required");}
if(empty($email)) {array_push($errors, "Email is required");}
if(empty($password_1)) {array_push($errors, "Password is required");}
if($password_1 != $password_2) {array_push($errors, "Passwords do not match");}

//Check db for existing user with same username

$user_check_query = "SELECT * FROM user WHERE username = '$username' OR email = '$email' LIMIT 1";

$results = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($results);

if($user){

	if($user['username'] === $username) {array_push($errors, "Username already exists");}
	if($user['email'] === $email) {array_push($errors, "This email ID is already registered to a Username");}
}

//Register the User if no error

if(count($errors) == 0){
	
	$password = md5($password_1); //this will encrypt the password
	$query = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";

	mysqli_query($db,$query);

	$_SESSION['username'] = $username;
	$_SESSION['success'] = "You are now logged in";

	header('location: index.php');
}
}
//LOG IN USER
function login(){
 global $db, $username, $errors;

	$username = ($_POST['username']);
	$password = ($_POST['password_1']);

	if(empty($username)){

		array_push($errors, "Username is required");
	}
	if(empty($password)){
		array_push($errors, "Password is required");
	}

	if(count($errors) == 0) {

		$password = md5($password);

		$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";
		$results = mysqli_query($db, $query);

		if(mysqli_num_rows($results)) {
		
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "Logged in successfully";
			header('location: index.php');
		}else{
			array_push($errors, "Wrong name and Password combination, Please try again"); 
		}
	}
}

	function isLoggedIn()
	{
		if (isset($_SESSION['username'])) {
			return true;
		}else{
			return false;
		}
	}

	function display_error() {
		global $errors;

		if (count($errors) > 0){
			echo '<div class="error">';
				foreach ($errors as $error){
					echo $error .'<br>';
				}
			echo '</div>';
		}
	}


?>