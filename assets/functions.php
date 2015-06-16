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

//Session user or company
$_SESSION['user-type'] = 'user';


/**
 * checkUser
 *
 * @return Shows profile page of user or company.
 */
function checkUser() {
	global $con;
	$userId =  1; //$_SESSION['user_id'];

	//If user type is a company.
	if ($_SESSION['user-type'] == 'company'){
		$result = mysqli_query($con, "SELECT * FROM `company` WHERE `company_id` = $userId ");

		while ($row = mysqli_fetch_array($result)) {

			//Make up div's.
			echo "	<div class='userItem'>
					<div><b>ID</b></div>
					<div><b>Gebruikersnaam</b></div>
					<div><b>Voornaam</b></div>
					<div><b>Achternaam</b></div>
					<div><b>E-mail Adres</b></div>
					<div><b>Locatie</b></div>
					<div><b>Bedrijf Foto</b></div>
					<div><b>Bedrijf CV</b></div>
					<div><b>Bedrijf raam Foto</b></div>
					<div><b>Sector</b></div>
					</div>
				";

			//company data
			echo "<div class='userItem'><div>" . $row['company_id'] . "</div><div>" . $row['company_name'] . "</div><div>" . $row['company_contact_firstname'] . "</div><div>" . $row['company_contact_lastname'] . "</div><div>" . $row['company_mail'] . "</div><div>" . $row['company_location'] . "</div><div>" . $row['company_picture'] . "</div><div>" . $row['company_cv'] . "</div><div>" . $row['company_window_pic'] . "</div><div>" . $row['company_sector'] . "</div></div>";
		

		} //If user type is a user.
	} else if ($_SESSION['user-type'] == 'user'){
		$result = mysqli_query($con, "SELECT * FROM `users` WHERE `user_id` = $userId ");

		while ($row = mysqli_fetch_array($result)) {

			
			echo "	<div class='userItem'>
						<div><b>ID</b></div>
						<div><b>Gebruikersnaam</b></div>
						<div><b>Voornaam</b></div>
						<div><b>Achternaam</b></div>
						<div><b>E-mail Adres</b></div>
						<div><b>Contact Info</b></div>
						<div><b>Locatie</b></div>
						<div><b>Profiel Foto</b></div>
						<div><b>CV</b></div>
						<div><b>Interesses</b></div>
						<div><b>Sector</b></div>
						<div><a href='edit.php'><b>Aanpassen</b></a></div>
					</div>

				";

				echo "<div class='userItem'><div>" . $row['user_id'] . "</div><div>" . $row['user_name'] . "</div><div>" . $row['user_firstname'] . "</div><div>" . $row['user_lastname'] . "</div><div>" . $row['user_mail'] . "</div><div>" . $row['user_contact_info'] . "</div><div>" . $row['user_location'] . "</div><div>" . $row['user_picture'] . "</div><div>" . $row['user_cv'] . "</div><div>" . $row['user_interests'] . "</div><div>" . $row['user_sector'] . "</div></div>";

		}
	}
}

?>

