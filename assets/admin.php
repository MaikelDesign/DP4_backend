<?php
/**
 * Functions used to change the profile of a company or user.
 *
 * 
 *
 * 
 * @author Patrick Reijnen, Maikel Verbeek, Stef van der Loo, Boris Vellekoop, Sam van de wal
 */

	include'connectDB.php';
	session_start();


?>

<html>
<head>
	<?php include 'head.php'; ?>
	<?php include 'functions.php'; ?>
	    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- scale for different screen sizes -->
    <title>Build your own city </title>
    <link href="../css/stylesheet.css" rel="stylesheet">
    <link href="css/queries.css" rel="stylesheet">
<!--		<link rel="icon" type="image/png" href="images/icon.png"/> icon in url bar -->
    <script src="js/jquery_v1.11.1.js"></script>
    <script src="js/jquery-ui-1.10.4.min.js"></script>
	  <script src="js/js.js"></script>
    <script src="js/script.js"></script>

</head>
<body>

	<div class="container">

		<div>
			<div>
				<h4>Beheer Profiel</h4>
			</div>
			<div class="userItem">
				<span><b>ID</b></span>
				<span><b>Gebruikersnaam</b></span>
				<span><b>Voor Naam</b></span>
				<span><b>Achternaam</b></span>
				<span><b>E-mail Adres</b></span>
				<span></span>
			</div>
			<?php checkAccounts();?>
		</div>	

	</div>	

</body>
</html>


