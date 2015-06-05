<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

session_start();

require('connectDB.php');
/*
	Hoe global $_FILES te gebruiken:
    $_FILES["file"]["name"] - the name of the uploaded file
    $_FILES["file"]["type"] - the type of the uploaded file
    $_FILES["file"]["size"] - the size in bytes of the uploaded file
    $_FILES["file"]["tmp_name"] - the name of the temporary copy of the file stored on the server
    $_FILES["file"]["error"] - the error code resulting from the file upload
*/

$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);//file naam opsplitsen 
$extension = end($temp);//pakt einde van opsplitsing dus extensie

if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 300000)//file is smaller than 300kb
&& in_array($extension, $allowedExts)) {//the extension is in array $allowedExts
  if ($_FILES["file"]["error"] > 0) {
    echo "Error: " . $_FILES["file"]["error"] . "<br>";
  } 
  else {
  	if (file_exists("../img/uploads/" . $_FILES["file"]["name"])) {
		echo $_FILES["file"]["name"] . " already exists. "; 
	}
	else{
	    move_uploaded_file($_FILES["file"]["tmp_name"], "../img/uploads/" . $_FILES["file"]["name"]);//zet server map upload > mapattribuut op 777 
	
		    $photoName = $_FILES['file']['name'];
		
		    //gegevens ophalen
		    $photoSize = $_FILES['file']['size'];
		    date_default_timezone_set('Europe/Amsterdam'); 
			$datetime = date("y-m-d h:i:s"); //date time
					
			//haal user id op of company id
			$userID = $_SESSION['user_id'];
		    $userType = $_SESSION['user-type'];    
        
            if($userType == 'user'){
                 $sql = "UPDATE users SET user_picture='$photoName' WHERE user_id='$userID'";
			     $result = mysqli_query($con, $sql);
                
                if($result){
				    $_SESSION['error'] = "upload succes";
                    header('location:../index.php');
                }
                else{
				    $_SESSION['error'] = "upload failed";
                    header('location:../index.php');                    
                }	
            }
            if($userType == 'company'){
                
                $sql = "UPDATE company SET company_window_pic='$photoName' WHERE company_id='$userID'";
			    $result = mysqli_query($con, $sql);
                
                if($result){
				    $_SESSION['error'] = "upload succes";
                    header('location:../index.php');
                }
                else{
				    $_SESSION['error'] = "upload failed";
                    header('location:../index.php');                    
                }	
                
            }else{
                $_SESSION['error'] = "No user type isset";
                header('location:../index.php');  
            }
				
	}
  }
   
}  
 
else {
  echo "Invalid file";
}
?>