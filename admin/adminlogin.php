<?php

/**
* Simple PHP login/logout scripts
//https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php
**/

// Create database connection using config file
require_once("config.php");

// Define variables and initialize with empty values
$admin = $password = "";

//Task 2 Q1 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	// Fetch data from the form
	$admin = $_POST['admin'];
	$password = ($_POST['password']);
	
	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		exit();
	}
	
	$sql = "SELECT * FROM admin WHERE admin = '".$admin."' AND password = '".$password."'";
	
	$result = mysqli_query($mysqli, $sql);	
	$rowcount = mysqli_num_rows($result);
	mysqli_free_result($result);	
	

	if($rowcount == 1) {  //if result matches exactly 1 record (1 user)

		//redirect to the landing page after login 
		header("Location:/assignment/admin/index.php"); //you are logged in successfully

	} else {
		//Invalid Username or Password!	
		header("Location:login.php?message=loginfail");		
	}
		
}
else {
	include("admin.html");
	if(isset($_GET['message']) && $_GET['message'] == "loginfail")
	{
		echo "<script>alert('Wrong Username or Password!');</script>";
	}
}

?>




