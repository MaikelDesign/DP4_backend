<?php

/**
 * Dit bestand bevat alles van de contact
 *
 * @author Patrick Reijnen <patrickreynen@student.fontys.nl>
 */

	session_start();
	//Kijkt of er is ingelogd,zo niet stuurt hij automatisch terug naar de inlog pagina.
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

		<div id="contact" class="profile">
			<div>
				<h4>Contact</h4>
			</div>
			<div id="contactInfo">
				<h4>Patrick Reijnen</h4>
				<h5>patrick.reijnen@student.fontys.nl</h5>
				<h5><a href="downloads/documentatie.pdf">Documentatie</a></h5>
			</div>
			<div>
				<img id="pasfoto" src="images/patricksmall.jpg" alt="Pasfoto">
			</div>
		</div>

		<div id="apiDoc" class="profile">
			<div>
				<h4>API Documentatie <?php echo("<p id='apiContact'>Jou API Key: ".$_SESSION['api_key']."</p>"); ?></h4>
			</div>
			<div>
				<h4>Het is mogelijk de data op te vragen van het tab, "Films die je MOET zien.."</h4>

				<ul>
					<li>De feed kun je opvragen via de URL: <span class="gray">http://i308810.iris.fhict.nl/P5/php32/api.php</span></li>
					<li>Zonder je API key is er geen toegang. Voeg daarom <span class="gray">?key=JOU KEY</span> achter de url toe.</li>
					<li>Je dient ook nog het data formaat te kiezen. Momenteel is dit enkel beschikbaar in JSON. Voeg daarom <span class="gray">&format=json</span> toe.</li>
				</ul>
				
				<h4>Voorbeeld:</h4>
				<ul>
					<li>Als je API key <span class="gray">ksdkk29283KSDKLL</span> is.</li>
					<li>vraag je dus de link op: <span class="gray">http://i308810.iris.fhict.nl/P5/php32/api.php?key=ksdkk29283KSDKLL&format=json</span> </li>
				</ul>
				
				<h4>JSON Output</h4>
				<pre class="output">
{
    "films": [
        {
            "id": "1",
            "titel": "Man on fire",
            "genre": "Actie"
        },
        {
            "id": "2",
            "titel": "Dumb and Dumberer",
            "genre": "Comedy"
        },
        {
            "id": "3",
            "titel": "DefQon 2014",
            "genre": "Muziek"
        }
    ]
}
				</pre>

				<h4>Voer in het onderstaande formulier je API key in en je vraag automatisch een JSON Feed op.</h4>
					<form action="" method="POST">
							<input type="text" placeholder="API-KEY" name="apikey">
							<input class="loginButton" type="submit" value="Genereer Json Feed" name="submit">
					</form>


			<?php
				if(isset($_POST["submit"])){
					$apikey = mysqli_real_escape_string($mysqli, $_POST["apikey"]);
					header("location:http://i308810.iris.fhict.nl/P5/php32/api.php?key=" . $apikey . "&format=json");
			
				}
			?>
			</div>

		</div>



	</div>
</body>
</html>
<?php
}
?>
 