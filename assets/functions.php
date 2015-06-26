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

            
            // check if edit button is clicked
            if($edit == ''){
                
                echo '
                      <div class="een">
                        <img src="../img/medtronic.jpeg">
                        <a href="admin.php?edit=true" >Edit Profile</a>
                        <ul class = "profielList">
                              <li>' . $row['company_name'] .' </li>
                              <li>' . $row['company_sector'] . '</li>
                              <li>' . $row['company_location'] . '</li>
                        </ul>
                        </div>
                        <div class="twee profielOmschrijving">
                            <p><span>' . $row['company_name'] . '</span> '. $row['company_info'] . '</p>
                    </div>
                    ';
            }
            else if($edit != ''){

                echo '
                      <div class="een">
                        <img src="../img/medtronic.jpeg">
                        <a href="admin.php" >Exit edit</a>
                        <form action="profile_edit.php" method="post" name"edit-form"><br/>
                            <input type="number" name="user-id" value="' . $userId . '" hidden/><br/>                        
                            <ul class = "profielList">
                                  <li><input type="text" name="firstName" value="' . $row['company_name'] .'"/></li>
                                  <li><input type="text" name="sector" value="' . $row['company_sector'] . '"/></li>
                                  <li><input type="text" name="location" value="' . $row['company_location'] . '"/></li>
                            </ul>
                            </div>
                            <div class="twee profielOmschrijving">
                            <p><span>' . $row['company_name'] . '</span><br/><textarea rows="10" cols="30" name="info">'. $row['company_info'] . '</textarea></p>
                            <input type="submit" value="submit"/>
                        </form>
                    </div>
                    ';
            }

		

		} //If user type is a user.
	}
    else if ($_SESSION['user-type'] == 'user'){
		$result = mysqli_query($con, "SELECT * FROM `users` WHERE `user_id` = $userId ");

        while ($row = mysqli_fetch_array($result)) {



            // check if edit button is clicked
            if($edit == ''){


               echo "
                        <div class='een'>
                            <img src='../img/profiel2.jpg' width='100%''>
                            <a href='admin.php?edit=true' >Edit Profile</a>
                            <ul class = 'profielList'>
                            <li>" . $row['user_firstname'] .  " " . $row['user_lastname'] . "</li>
                            <li>" . $row['user_location'] . "</li>
                            <li><a href='http://" . $row['user_cv'] . "' target='_blank'>LinkedIn</a></li>
                            </ul>
                        </div>

                        <div class='twee profielOmschrijving'>
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
                
                echo "
                        <div class='een'>
                            <img src='../img/profiel2.jpg' width='100%''>
                            <a href='admin.php?edit=true' >Edit Profile</a>
                            <form action='profile_edit.php' method='post' name='edit-form'><br/>
                                <input type='number' name='user-id' value='" . $userId . "' hidden/><br/>
                                <ul class = 'profielList'>
                                    <li><input type='text' name='firstName' value='" . $row['user_firstname'] . "'/></li>
                                    <li><input type='text' name='lastName' value='" . $row['user_lastname'] . "'/></li>
                                    <li><input type='text' name='location' value='" . $row['user_location'] . "'</li>
                                    <li><input type='text' name='cv' value='http://" . $row['user_cv'] . "'/></li>
                                </ul>    
                        </div>

                        <div class='twee profielOmschrijving'>
                            <textarea rows='10' cols='30' name='info'>". $row['user_contact_info'] . "</textarea></p>
                            <input type='submit' value='submit'/>
                            </form>
                        </div>
                    ";
                
                
            }
            
		}
	}
}

?>

