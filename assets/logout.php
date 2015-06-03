<?php 

session_start();
session_unset();
session_destroy();

$_SESSION['check'] = true;
if(isset($_SESSION['check'])){
	header('location:../index.php');
}

?>