<?php

/**
 * Op deze pagina vindt je alles rondom het opvragen van gegevens via de API.
 *
 * @package    Eindopdracht
 * @author     Patrick Reijnen <patrickreynen@gmail.com>
 */

	session_start();
	include 'head.php';
	//Kijkt of er is ingelogd,zo niet stuurt hij automatisch terug naar de inlog pagina.
	if(!isset($_SESSION["sess_user"])) {
		Echo "Je moet ingelogd zijn om deze pagina te bekijken! Druk <a href='index.php'>hier</a> om terug te keren naar de inlog pagina.";
	} else{ 
		$api = $_GET['key']; //Haal de ingevoerde key op
		$format = $_GET['format']; //Haal de ingevoerde key op
		$array = $_GET['array']; //Haal de ingevoerde key op
		if ($api !== $_SESSION['api_key']) { //Voert uit als code incorrect is of niet overheen komt met de gebruiker.
			echo "De API key is incorrect ingevoerd";
		} else {
		
			if ($format == "json") { //Als het opgegeven formaat JSON is.

				$result = mysqli_query($mysqli, "SELECT * FROM `csvdata`");

				//Onderstande code vraagt de gegevens om en zet deze perfect om in een array, Met een beetje hulp van mijn ingezonden vraag naar Stack-overflow :)
				$response = array();
				$response['films'] = array();

				//mysqli_fetch_array doet beide numerieke en string arrays,
				while ($row = mysqli_fetch_assoc($result)) {
				  $response['films'][] = $row;
				}
				//Zet de array om naar een valide JSON
				echo json_encode($response);
				
			}elseif ($format == "xml") { //Als het format XML is opgegeven.
				echo "XML formaat momenteel niet beschkbaar!";
			}else { //Als er geen format is aangegeven.
				echo "Geef een format op, je doet dit door het toevoegen van &format=xml of &format=json";
			}
		}


	}

?>
