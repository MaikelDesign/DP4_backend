<?php

/**
 * Dit bestand bevat alles wat word gebruikt zodra je een gebruiker verwijdert.
 * @author     Patrick Reijnen <patrickreynen@gmail.com>
 */
ini_set('display_errors', '1');
	session_start();
	//Kijkt of er is ingelogd,zo niet stuurt hij automatisch terug naar de inlog pagina.
	if ($_SESSION["sess_user"] == "admin"){
	if(!isset($_SESSION["sess_user"])) {
		header("location:index.php");
	} else{ 
?>
<html>
<head>
	<?php include 'head.php'; ?>

</head>
<body>
	<?php include 'header.php'; ?> 
	<?php include 'navigation.php'; ?> 

<div class="container">

	<?php 	
		//Vraag meegegevn id op en opslaan in session.
    	$id = $_GET['id'];
    	$_SESSION['id']=$id;  
    	//Zodra verwijder knop is ingedrukt
		if (isset($_POST['verwijder'])){
			$id = $_SESSION['id'];
			mysqli_query($mysqli, "DELETE FROM `login` WHERE `id`= '$id'");
			echo "<div class='succes'>Gebruiker succesvol verwijderd! <a href='admin.php'>Klik hier</a> om terug te gaan naar de beheer pagina.</div></div>";
		}

	?>		
			<div id="indexBox">
			<form id="indexlog" action="" method="POST">
				<h5>Weet je zeker dat je de gebruiker wilt verwijderen?</h5>
				<input class="loginButton" type="submit" value="Verwijder" name="verwijder">
			</form>
			</div>


</div>
</body>
</html>

<?php
}} else {
	header("location:index.php");
}
?>

