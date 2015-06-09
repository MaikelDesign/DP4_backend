<?php

/**
 * Dit bestand word in werking gezet zodra je op de logout knop drukt.
 *
 * @author     Patrick Reijnen <patrickreynen@gmail.com>
 */

	session_start();
	unset ($_SESSION['api_key']);
	unset ($_SESSION['sess_user']);
	session_destroy();
	header("location:index.php");
?>