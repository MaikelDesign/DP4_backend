<?php

/**
 * Dit bestand bevat alles van de registreer pagina.
 *
 * @author Patrick Reijnen <patrickreynen@student.fontys.nl>
 */

ob_start(); //Fix die er voor zorgt dat het ook op Database van MAMP werkt.
include 'dbconnection.php';
ini_set('display_errors', '1');

?>

<html>
<head>
	<?php include 'head.php'; ?>
</head>
<body>

	<?php include 'header.php'; ?>

	<article>
		
		<div id="indexBox">
			<form id="indexLog" action="" method="POST">
				<input type="text" placeholder="Voornaam" name="frontname">
				<input type="text" placeholder="Achternaam" name="lastname">
				<input type="text" placeholder="E-mail adres" name="email">
				<input type="text" placeholder="Gebruikersnaam" name="username">
				<input type="password" placeholder="Wachtwoord" name="password">
				<input class="loginButton" type="submit" value="Registreren" name="submit">
			</form>
		</div>



<?php
	//Start functie voor het  registeren zodra de knop 
	if(isset($_POST['submit'])){

		registreren($front= mysqli_real_escape_string($mysqli, $_POST['frontname']),
					$last= mysqli_real_escape_string($mysqli, $_POST['lastname']),
					$email= mysqli_real_escape_string($mysqli, $_POST['email']),
					$user= mysqli_real_escape_string($mysqli, $_POST['username']),
					$pass= mysqli_real_escape_string($mysqli, md5($_POST['password'])),
					$api= md5(mt_rand())
						);		
	}

?>

	</article>	

</body>
</html>
 