<?php
/**
 * Functions that are used on the portal.
 * Most of the functions are described with a manual.
 * 
 *
 * 
 * @author Patrick Reijnen, Maikel Verbeek, Stef van der Loo, Boris Vellekoop, Sam van de wal
 */

	include'connectDB.php';
	session_start();


$_SESSION['user-type'] = 'company';


/**
 * Accountbeheer
 *
 * @return laat alle accounts zien en zorgt dat je deze kan verwijderen.
 */
function checkAccounts() {
	global $con;
	$userId =  2; //$_SESSION['user_id'];

	//If user type is a company.
	if ($_SESSION['user-type'] == 'company'){
		$result = mysqli_query($con, "SELECT * FROM `company` WHERE `company_id` = $userId ");

		while ($row = mysqli_fetch_array($result)) {

			//Checkt of de gebruiker admin is, en verwijderd indien nodig de verwijder knop.
			echo "<div class='userItem'><span>" . $row['company_id'] . "</span><span>" . $row['company_name'] . "<span>" . $row['company_contact_firstname'] . "<span>" . $row['company_contact_lastname'] . "<span>" . $row['company_mail'] .  "</span></div>";
			//	<div class='gebruikerItem'>
			//	$row['company_id'];		<span>" . $row['company_id'] . "</span><span>" . $row['company_name'] . "</span><span>" . $row['company_mail'] . " " . $row['company_location'] . "</span><span>" . $row['company_contact_firstname'] . "</span><span></span></div>"; 

		} //If user type is a user.
	} else if ($_SESSION['user-type'] == 'user'){
		$result = mysqli_query($con, "SELECT * FROM `users`");

		while ($row = mysqli_fetch_array($result)) {

			//Checkt of de gebruiker admin is, en verwijderd indien nodig de verwijder knop.
			echo $row['user_id'];
			//	<div class='gebruikerItem'>
			//			<span>" . $row['company_id'] . "</span><span>" . $row['company_name'] . "</span><span>" . $row['company_mail'] . " " . $row['company_location'] . "</span><span>" . $row['company_contact_firstname'] . "</span><span></span></div>"; 

		}
	}
}

?>

