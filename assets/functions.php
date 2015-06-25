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

//Session user or company
//$_SESSION['user-type'] = 'user';


/**
 * checkUser
 *
 * @return Shows profile page of user or company.
 */
function checkUser() {
	global $con;
	$userId =  $_SESSION['user_id']; //$_SESSION['user_id'];
    $edit = $_GET['edit'];
	//If user type is a company.
	if ($_SESSION['user-type'] == 'company'){
		$result = mysqli_query($con, "SELECT * FROM `company` WHERE `company_id` = $userId ");

		while ($row = mysqli_fetch_array($result)) {

			//Make up div's.
			// echo "	<div class='userItem'>
			// 		<div><b>ID</b></div>
			// 		<div><b>Gebruikersnaam</b></div>
			// 		<div><b>Voornaam</b></div>
			// 		<div><b>Achternaam</b></div>
			// 		<div><b>E-mail Adres</b></div>
			// 		<div><b>Locatie</b></div>
			// 		<div><b>Bedrijf Foto</b></div>
			// 		<div><b>Bedrijf CV</b></div>
			// 		<div><b>Bedrijf raam Foto</b></div>
			// 		<div><b>Sector</b></div>
			// 		</div>
			// 	";
            
            // check if edit button is clicked
            if($edit == ''){
             //company data
			// echo "<div class='userItem'>" . $edit . "<div>" . $row['company_id'] . "</div><div>" . $row['company_name'] . "</div><div>" . $row['company_contact_firstname'] . "</div><div>" . $row['company_contact_lastname'] . "</div><div>" . $row['company_mail'] . "</div><div>" . $row['company_location'] . "</div><div>" . $row['company_picture'] . "</div><div>" . $row['company_cv'] . "</div><div>" . $row['company_window_pic'] . "</div><div>" . $row['company_sector'] . "</div></div>";

                echo "
                        <div class='een'>
                            <img src='../img/gebouw1.jpg' width='100%''>
                            <a href='admin.php?edit=true' >Edit Profile</a>
                            <p>" . $row['company_name'] . "</p>
                            <p>" . $row['company_location'] . "</p>
                            <p><a href='http://" . $row['company_cv'] . "' target='_blank'>Website</a></p>
                        </div>

                        <div class='twee'>
                            <p>" . $row['company_sector'] . "</p>
                            <p>" . $row['company_info'] . "</p>                            
                        </div>
                    ";
            }
            else if($edit != ''){
                // Set values in edit form
//                echo "<div class='userItem'>
////                        <img scr='../img/" . $row['company_picture'] . "' alt='company profile pic' /><br/>
//                        Profile image<br/>
//                        <img scr='../img/" . $row['company_window_pic'] . "' alt='company window pic' /><br/>
//                        Window image<br/>
//                        <form action='profile_edit.php' method='post' name='edit-form'><br/>
//                            <input type='number' name='user-id' value='" . $userId . "' hidden/>
//                            Company name: <input type='text' name='cUsername' width='50' value='" . $row['company_name'] . "'/><br/>
//                            Contact first name: <input type='text' name='cFirstName' width='50' value='" . $row['company_contact_firstname'] . "'/><br/>
//                            Contact last name: <input type='text' name='cLastName' width='50' value='" . $row['company_contact_lastname'] . "'/><br/>
//                            e-mail: <input type='text' name='email' width='50' value='" . $row['company_mail'] . "'/><br/>
//                            Location: <input type='text' name='location' width='50' value='" . $row['company_location'] . "'/><br/> 
//                            CV: <input type='text' name='cv' width='50' value='" . $row['company_cv'] . "'/><br/>
//                            Sector: <input type='text' name='sector' width='50' value='" . $row['company_sector'] . "'/><br/>
//                            Company info: <input type='text' name='info' width='50' value='" . $row['company_info'] . "'/><br/>
//                            <input type='submit' value='Submit'/>
//                        </form>
//                    </div>";
                
                 echo "
                        <div class='een'>
                            <img src='../img/profiel2.jpg' width='100%''>
                            <a href='admin.php' >Exit edit</a>
                            <form action='profile_edit.php' method='post' name='edit-form'><br/>
                                Company name: <input type='text' name='cUsername' width='50' value='" . $row['company_name'] . "'/><br/>
                                Contact first name: <input type='text' name='cFirstName' width='50' value='" . $row['company_contact_firstname'] . "'/><br/>
                                Contact last name: <input type='text' name='cLastName' width='55' value='" . $row['company_contact_lastname'] . "'/><br/>
                                e-mail: <input type='text' name='email' width='50' value='" . $row['company_mail'] . "'/><br/>   
                        </div>

                        <div class='twee'>
                                Location: <input type='text' name='location' width='50' value='" . $row['company_location'] . "'/><br/> 
                                CV: <input type='text' name='cv' width='50' value='" . $row['company_cv'] . "'/><br/>
                                Sector: <input type='text' name='sector' width='50' value='" . $row['company_sector'] . "'/><br/>
                                Company info: <input type='text' name='info' width='50' value='" . $row['company_info'] . "'/><br/>
                                <input type='submit' value='Submit'/>
                            </form>
                            
                        </div>
                    ";
            }

		

		} //If user type is a user.
	}
    else if ($_SESSION['user-type'] == 'user'){
		$result = mysqli_query($con, "SELECT * FROM `users` WHERE `user_id` = $userId ");

        while ($row = mysqli_fetch_array($result)) {

			 //     echo "	<div class='userItem'>
				// 		<div><b>ID</b></div>
				// 		<div><b>Gebruikersnaam</b></div>
				// 		<div><b>Voornaam</b></div>
				// 		<div><b>Achternaam</b></div>
				// 		<div><b>E-mail Adres</b></div>
				// 		<div><b>Contact Info</b></div>
				// 		<div><b>Locatie</b></div>
				// 		<div><b>Profiel Foto</b></div>
				// 		<div><b>CV</b></div>
				// 		<div><b>Interesses</b></div>
				// 		<div><b>Sector</b></div>
				// 		<div><a href='edit.php'><b>Aanpassen</b></a></div>
				// 	</div>

				// ";

            // check if edit button is clicked
            if($edit == ''){
             //user data
	 //          echo "<div class='userItem'><div>" . $row['user_id'] . "</div><div>" . $row['user_name'] . "</div><div>" . $row['user_firstname'] . "</div><div>" . $row['user_lastname'] . "</div><div>" . $row['user_mail'] . "</div><div>" . $row['user_contact_info'] . "</div><div>" . $row['user_location'] . "</div><div>" . $row['user_picture'] . "</div><div>" . $row['user_cv'] . "</div><div>" . $row['user_interests'] . "</div><div>" . $row['user_sector'] . "</div></div>";

               echo "
                        <div class='een'>
                            <img src='../img/profiel2.jpg' width='100%''>
                            <a href='admin.php?edit=true' >Edit Profile</a>
                            <p>" . $row['user_firstname'] .  " " . $row['user_lastname'] . "</p>
                            <p>" . $row['user_location'] . "</p>
                            <p><a href='http://" . $row['user_cv'] . "' target='_blank'>LinkedIn</a></p>
                        </div>

                        <div class='twee'>
                            <p>" . $row['user_contact_info'] . "</p>
                        </div>
                    ";
            }
            else if($edit != ''){
                // Set values in edit form
                
                
                   echo "
                        <div class='een'>
                            <img src='../img/profiel2.jpg' width='100%''>
                            <a href='admin.php' >Exit edit</a>
                            <form action='profile_edit.php' method='post' name='edit-form'><br/>
                                <input type='number' name='user-id' value='" . $userId . "' hidden/><br/>
                                <input type='text' name='firstName' value='" . $row['user_firstname'] .  "' ><br/>
                                <input type='text' name='lastName' value='" . $row['user_lastname'] . "' ><br/>
                                <input type='text' name='location' value='"  . $row['user_location'] . "'><br/>
                                <input type='text' name='cv' value='http://" . $row['user_cv'] . "'>'<br/>
                        </div>

                        <div class='twee'>
                                <input type='text' name='info' value='" . $row['user_contact_info'] . "'/><br/>
                                <input type='submit' value='submit'/>
                            </form>
                            
                        </div>
                    ";
                
//                echo "<div class='userItem'>
//                        <div>" . $row['user_id'] . "</div>
//                        <img scr='../img/" . $row['user_picture'] . "' alt='company profile pic' /><br/>
//                        Profile image<br/>
//                        <form action='profile_edit.php' method='post' name='edit-form'><br/>
//                            <input type='number' name='user-id' value='" . $userId . "' hidden/>
//                            Username: <input type='text' name='username' width='50' value='" . $row['user_name'] . "'/><br/>
//                            First name: <input type='text' name='firstName' width='50' value='" . $row['user_firstname'] . "'/><br/>
//                            Last name: <input type='text' name='lastName' width='50' value='" . $row['user_lastname'] . "'/><br/>
//                            e-mail: <input type='text' name='email' width='50' value='" . $row['user_mail'] . "'/><br/>
//                            Location: <input type='text' name='location' width='50' value='" . $row['user_location'] . "'/><br/> 
//                            CV: <input type='text' name='LinkedIn Profile' width='50' value='" . $row['user_cv'] . "'/><br/>
//                            Sector: <input type='text' name='sector' width='50' value='" . $row['user_sector'] . "'/><br/>
//                            Info: <input type='text' name='info' width='50' value='" . $row['user_contact_info'] . "'/><br/>
//                            <input type='submit' value='Submit'/>
//                        </form>
//                    </div>";
            }
            
		}
	}
}

?>

