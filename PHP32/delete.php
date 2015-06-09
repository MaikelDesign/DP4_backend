<?php

/**
 * Dit bestand word in werking gezet zodra je op de uitschrijven knop drukt.
 *
 * @author     Patrick Reijnen <patrickreynen@gmail.com>
 */

include 'dbconnection.php';

	session_start();
	$idUser = $_SESSION['sess_user'];
	mysqli_query($mysqli, "DELETE FROM `login` WHERE `username`= '$idUser'");	
	session_destroy();
	header("location:index.php");
?>