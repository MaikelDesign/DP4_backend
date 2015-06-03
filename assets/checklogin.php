<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

session_start();


if(isset($_SESSION['logged_in']) == false){

	require('connectDB.php');

	/*
	session_start(); 
	require ('db.php'); // username and password sent from form 
	*/
	
	$myusername= $_POST['myusername']; 
	$mypassword= md5($_POST['mypassword']); // encrypt password 
	
	$sql="SELECT * FROM user WHERE user_name='$myusername' and user_password='$mypassword'";
	
	$result=mysqli_query($con,$sql);
	$count=mysqli_num_rows($result); // If result matched $myusername and $mypassword, table row must be 1 row 
	
	if($count==1){ // Register $myusername, $mypassword and redirect to file "login_success.php" 
		$_SESSION["myusername"] = $myusername; 
		$_SESSION["mypassword"] = $mypassword; 
		$_SESSION['logged_in'] = true;
		header('location:login_succes.php');
	} 
	else{
		session_unset();
		echo "U heeft een verkeerde gebruikersnaam of wachtwoord ingevuld. <a href='../index.php'>Klik hier</a> om het nogmaals te proberen."; 
	}
}
else { 
	header('location:login_succes.php');//ga naar de inlog pagina
} 
	



?>