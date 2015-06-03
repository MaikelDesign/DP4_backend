<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

session_start();


/* if(isset($_SESSION['reg']) == false){ */

	require('connectDB.php');

	/*
	session_start(); 
	require ('db.php'); // username and password sent from form 
	*/
	$tbl_name = 'user';
	
	$myusername= $_POST['myusername']; 
	$mypassword= $_POST['mypassword'];
	$setpassword= $_POST['setpassword'];
	
	
	if($mypassword == $setpassword){
		$password = md5($mypassword);
		$datetime=date("y-m-d h:i:s"); //date time
		$sql="INSERT INTO $tbl_name (user_name, user_password, user_datetime) VALUES('$myusername','$password','$datetime')";
		$result=mysqli_query($con, $sql);
		if($result){
			$_SESSION[$myusername];
			header('location:../index.php');
		}else{
			session_unset();
			header('location:register.php');
			//fout bij registeren
		}
	}else{
		//error wachtwoorden komen niet overeen;
		header('location:register.php');
		
	}	
	
/*
else{
	session_unset();
	header('location:register.php');
}
*/
	



?>