<?php
/**
 * Dit bestand bevat functies die door de gehele site worden gebruikt.
 * Vele functies zijn hier uitgelicht om het overzicht te bewaren of omdat deze op meerdere pagina's gebruikt worden. 
 * Deze worden opgeroepen op de daadwerkelijk te gebruiken pagina's.
 *
 * @package    Eindopdracht
 * @author     Patrick Reijnen <patrickreynen@gmail.com>
 */

	include'dbconnection.php';
	session_start();


/**
 * Admin Check
 *
 * @return Word gekeken of de ingelogde gebruiker administrator rechten heeft.
 */

function checkAdmin() {
	global $mysqli;
		//Checkt of de sessie gebruiker een admin door middel van een query die kijkt of admin 1 of 0 is.
	if(isset($_SESSION['sess_user'])){
	$username = $_SESSION['sess_user'];
	$admin = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM `login` WHERE `username` = '$username' AND `admin` = '1'"));
	$_SESSION['admin'] = $admin;
		//Als de admin gekozen is zal het upload scherm verschijnen.
		if(isset($_SESSION['admin'])){
		if($_SESSION['admin'] === 1){
			echo "<li><a href='admin.php'>Beheer Omgeving</a></li>";
		} else {
			echo "<li><a href='delete.php' onclick='return confirm('Weet je zeker dat je dit account wilt verwijderen?')''>Account Verwijderen</a></li>";
		}
		
	}

}
}

/**
 * inladen van de RSS feed
 *
 * @return de gehele feed vanaf nu.nl wordt weergegeven.
 */
function rssFeed($type) {
	global $mysqli;
	//De feed

	 
	$feed = simplexml_load_file($type);

	//alle benodigde info uit de feed halen.
	foreach ($feed->channel->item as $item) {
		$link = (string) $item->link;
		$title = (string) $item->title;
		$description = (string) $item->pubDate;

		//Maak een div voor iedere nieuws item
	  	print '<div class="rssItem">';

	  	//print alle items, bij iedere %s wordt de eerste item geprint.
	  	printf(
	  		'<h4><a href="%s">%s</a></h4><p>%s</p>',
	    	$link,
	    	$title, 
	    	$description
	    );

  		echo '</div>';
	}
}

/**
 * Accountbeheer
 *
 * @return laat alle accounts zien en zorgt dat je deze kan verwijderen.
 */
function checkAccounts() {
	global $mysqli;
	$result = mysqli_query($mysqli, "SELECT * FROM `login`");
		while ($row = mysqli_fetch_array($result)) {

			//Checkt of de gebruiker admin is, en verwijderd indien nodig de verwijder knop.
		if($row['admin'] == 1){
			echo "
					<div class='gebruikerItem'>
						<span>" . $row['id'] . "</span><span>" . $row['username'] . "</span><span>" . $row['frontname'] . " " . $row['lastname'] . "</span><span>" . $row['email'] . "</span><span></span></div>"; 
		} else {
			echo "
					<div class='gebruikerItem'>
						<span>" . $row['id'] . "</span><span>" . $row['username'] . "</span><span>" . $row['frontname'] . " " . $row['lastname'] . "</span><span>" . $row['email'] . "</span><span></span><a href='deleteuser.php?id=" . $row['id'] . "'>Verwijder</a></div>"; 
		}
			
		
}
}

/**
 * filmTotaal api
 *
 * @return Laat door middel van de filmtotaal API het tv overzicht zien van alle films.
 */
function filmTotaal() {
	//zoekt de datum van vandaag
	$datum = date('d-m-Y');

	$feed = simplexml_load_file("http://www.filmtotaal.nl/api/filmsoptv.xml?apikey=g0anym5likb1qsne931dv5ztkcs0h130&dag=" . $datum . "&sorteer=0");
	$titel = (string) $shortUrl->film->titel;

	foreach ($feed->film as $item) {
		$titel = (string) $item->titel;
		$zender = (string) $item->zender;
		$cover = (string) $item->cover;
		$uitleg = (string) $item->synopsis;
		$starttijd = (string) $item->starttijd; $starttijd = gmdate("H:i", $starttijd); //Tijd opgeslagen in unix code
		$eindtijd = (string) $item->eindtijd; $eindtijd = gmdate("H:i", $eindtijd);
		$beoordeling = (string) $item->imdb_rating;
		$stemmen = (string) $item->imdb_votes;

		

		//Maak een div voor iedere nieuws item
	  	print '<div class="filmTotaalItem">';

	  	//print alle items, bij iedere %s wordt de eerste item geprint.
	  	printf(
	  		'<div class="filmTotaalCover"><img src="%s"></img></div><h5>Zender: %s</h5><h4>%s</h4><div class="filmUitleg"><p>%s</p></div><div><h5>Tijd: %s - %s </h5><h5>Beoordeeld met gemiddeld cijfer %s door %s personen</h5></div>',
	  		$cover,
	  		$zender,
	    	$titel,
	    	$uitleg,
	    	$starttijd,
	    	$eindtijd,
	    	$beoordeling,
	    	$stemmen

	    );

  		echo '</div>';
	}

}

/**
 * Accountbeheer
 *
 * @return laat alle accounts zien en zorgt dat je deze kan verwijderen.
 */
function filmsZien() {
	global $mysqli;
	$result = mysqli_query($mysqli, "SELECT * FROM `csvdata`");
		while ($row = mysqli_fetch_array($result)) {

			//Checkt of de gebruiker admin is, en verwijderd indien nodig de verwijder knop
			echo "<div class='filmKijken'><h3>" . $row['titel'] . "</h3><p>" . $row['genre'] . "</p></div>";
					
				if(isset($_POST['deleteList'])){
					$titel = $_POST['deleteList'];
					mysqli_query($mysqli, "DELETE FROM `csvdata` WHERE `titel`= '" . $titel . "'");
				}
		}
}

/**
 * Inloggen
 *
 * @param $user geeft de post met de username mee.
 * @param $pass geeft de post met het wachtwoord mee
 *
 * @return checkt of er een username en password gelijk zijn, Zoja wordt hier een sessie aangemaakt en ga je naar de homepage.
 */
function inloggen($user,$pass) {
	global $mysqli;
	//Query voorbereiden en uitvoeren
	$query="SELECT * FROM login WHERE username='$user' AND password='$pass'"; //bekijkt of de gebruikersnaam al bestaat.
	$result= mysqli_query($mysqli,$query);

	//Controleerd of de query iets terugeeft
	if($result){
		//Als er een match is dan returned de functie 1 (true), is er geen match dan returned de functie 0 (false)
		$rows = mysqli_num_rows($result);

		//Leegt de memory die geasocieerd is met het resultaat.
		mysqli_free_result($result);
	}

	//Zodra er een match is voer het volgende uit
	if($rows == 1) {
		//API key opvragen en opslaan in een sessie
	$result = mysqli_query($mysqli, "SELECT * FROM `login` WHERE username='$user'");
		while ($row = mysqli_fetch_array($result)) {
		$api = $row['api'];
		$_SESSION['api_key']=$api;
}
			//sla de variable User op in de sessie
			$_SESSION['sess_user']=$user;
			header("location:ingelogd.php");
	}else{
		//als er geen match is geef dan aan dat de gebruiker niet bestaat.
		echo "<div class='error'>gebruiker bestaat niet of wachtwoord is incorrect!</div>";
	}

}

/**
 * Registeren
 *
 * @param $front geeft de post met de voornaam mee.
 * @param $last geeft de post met de achternaam mee
 * @param $email geeft de post met het email adres mee
 * @param $user geeft de post met der username mee
 * @param $pass geeft de post met het wachtwoord mee
 * @param $api Maakt een willekeurige APi aan door middel van een random MD5 wachtwoord.
 *
 * @return Kijkt of de gebruiker al bestaat. Als dit niet het geval voeg dit dan toe aan de database.
 */
function registreren($front,$last,$email,$user,$pass,$api) {
	global $mysqli;
	//Query voorbereiden en uitvoeren
		$query="SELECT * FROM login WHERE username='$user'"; //bekijkt of de gebruikersnaam al bestaat.
		$result= mysqli_query($mysqli,$query);

		//Controleerd of de query iets terugeeft
		if($result){
			//Als er een match is dan returned de functie 1 (true), is er geen match dan returned de functie 0 (false)
			$rows = mysqli_num_rows($result);

			//Leegt de memory die geasocieerd is met het resultaat.
    		mysqli_free_result($result);
		}
		
		//check of er iets is ingevuld.
		if (empty($user) || empty($pass) || empty($email) || empty($last) || empty($front)) { 
		    echo "<div class='error'>Je bent verplicht alle velden in te vullen!</div>";
		    die();
		}

		//checkt of er een geldig e-mail adres is ingevuld.
		if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email)){ 
			echo "<div class='error'>Geen geldig e-mail adres!</div>";
			die();
		}

		//Zodra er geen match is voer het volgende uit
		if($rows == 0) {
			$query="INSERT INTO login(username,password,email,frontname,lastname,api) VALUES('$user','$pass','$email','$front','$last','$api')";

			$result=mysqli_query($mysqli, $query);

			if($result) {
				echo "<div class='succes'>Account aangemaakt! <a href='index.php'>Klik hier</a> om terug te gaan naar de login pagina.</div>";
			} else {
				echo "<div class='error'>Account aanmaken mislukt!</div>";
			}
		} else { //als er wel een match is voer onderstaand uit.
			echo "<div class='error'>Gebruikersnaam bestaat al! Kies een andere gebruikersnaam.</div>";
		}

}


/**
 * Admin Check
 *
 * @return Word gekeken of de ingelogde gebruiker administrator rechten heeft.
 */

function checkAdminVerwijder() {
	global $mysqli;
		//Checkt of de sessie gebruiker een admin door middel van een query die kijkt of admin 1 of 0 is.
	if(isset($_SESSION['sess_user'])){
	$username = $_SESSION['sess_user'];
	$admin = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM `login` WHERE `username` = '$username' AND `admin` = '1'"));
	$_SESSION['admin'] = $admin;
		//Als de admin gekozen is zal het upload scherm verschijnen.
		if(isset($_SESSION['admin'])){
		if($_SESSION['admin'] === 1){
			echo "<input class='loginButton' type='submit' value='Verwijder Items' name='submit'>";
		} else {
			
		}
		
	}

}
}

?>

