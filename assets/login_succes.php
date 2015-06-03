<?php
session_start();

error_reporting(E_ALL);
ini_set("display_errors", 1);

if(isset($_SESSION['logged_in']) == false){
	header('location:../index.php');
}

?>

<!DOCTYPE html>
<html>
	<head><!-- begin head-->
		<meta charset="UTF-8">	
		<link href="css/stylesheet.css" type="text/css" rel="stylesheet"/>
		<script src="javascript/javascript.js"></script>
		<title>succes</title>
	</head><!-- eind head -->
	<body><!-- begin code -->
		<p>Login Successful</p>
		
		<form action="logout.php" name="form1" method="post">
			<input type="submit" name="submit" value="log-out">
		</form>
	</body><!-- eind code-->
</html>
