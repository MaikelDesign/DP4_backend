<?php

/**
 * Dit bestand bevat alles van de inlog pagina
 *
 * @author Patrick Reijnen <patrickreynen@student.fontys.nl>
 */

ob_start(); //Fix die er voor zorgt dat het ook op Database van MAMP werkt.
include 'dbconnection.php';

?>

<!DOCTYPE HTML>
<html>
<head>
	<?php include 'head.php'; ?>
</head>
<body>

	<?php include 'header.php'; ?>

		
			<div id="indexBox">
				<form id="indexLog" method="POST">
					<input type="text" placeholder="Gebruikersnaam" name="user">
					<input type="password" placeholder="Wachtwoord" name="pass">
					<input class="loginButton" type="submit" value="Log in" name="submit">
					<div id="registreerButton"><a href="register.php">Registreren</a></div>
				</form>
			</div>


<?php
//Zodra knop SUBMIT is gedrukt uitvoeren script inloggen starten.
if(isset($_POST["submit"])){
	//Meegeven parameters, real_escape_string zorgt ervoor dat er geen SQL injection mogelijk is.
	inloggen(mysqli_real_escape_string($mysqli, $_POST["user"]),mysqli_real_escape_string($mysqli, md5($_POST['pass'])));
}
?>



</body>
</html>
 