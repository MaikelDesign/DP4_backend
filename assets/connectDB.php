<?php

$host="localhost"; // Host name 
$username="udid"; // Mysql username 
$password="udid1"; // Mysql password 
$db_name="udid_"; // Database name 


$con = mysqli_connect("$host", "$username", "$password", "$db_name")or die("cannot connect server ");

if(!$con)
{ // creation of the connection object failed
    die("connection object not created: ".mysqli_error($con));
}

if (mysqli_connect_errno()) 
{ // creation of the connection object has some other error
    die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
}

if (mysqli_connect_error())
{
	die('Service kan niet geladen worden.');
}  
?>