<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require('connectDB.php');
session_start();

//if form is post
if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    //if form-type is user
    if($_SESSION['user-type'] == 'user'){

        if(isset($_POST['username']) 
               && isset($_POST['user-id']) 
               && isset($_POST['firstName']) 
               && isset($_POST['lastName']) 
               && isset($_POST['email']) 
               && isset($_POST['location']) 
               && isset($_POST['cv']) 
               && isset($_POST['sector']) 
               && isset($_POST['info']) 
               && $_POST['user-id'] != '' 
               && $_POST['username'] != '' 
               && $_POST['firstName'] != ''
               && $_POST['lastName'] != ''
               && $_POST['email'] != ''
               && $_POST['location'] != ''
               && $_POST['cv'] != ''
               && $_POST['sector'] != ''
               && $_POST['info'] != ''
            ){
                
                // set variables
                $username  = $_POST['username'];
                $firstName = $_POST['firstName'];
                $lastName = $_POST['lastName'];
                $email = $_POST['email'];
                $location = $_POST['location'];
                $cv = $_POST['cv'];
                $sector = $_POST['sector'];
                $info = $_POST['info'];
                $id = $_POST['user-id'];
                $tbl_name = 'users';
                
                
                $sql = "UPDATE $tbl_name SET user_name='$username', user_mail='$email', user_location='$location', user_contact_info='$info', user_firstname='$firstName', user_lastname='$lastName', user_cv='$cv', user_sector='$sector' WHERE user_id='$id'";
                $result=mysqli_query($con, $sql);

                if($result){
                    header('location:admin.php');
                }
           }      
        
    }
    else if($_SESSION['user-type'] == 'company'){

            if(isset($_POST['cUsername'])                
               && isset($_POST['user-id']) 
               && isset($_POST['cFirstName']) 
               && isset($_POST['cLastName']) 
               && isset($_POST['email']) 
               && isset($_POST['location']) 
               && isset($_POST['cv']) 
               && isset($_POST['sector']) 
               && $_POST['user-id'] != '' 
               && $_POST['cUsername'] != '' 
               && $_POST['cFirstName'] != ''
               && $_POST['cLastName'] != ''
               && $_POST['email'] != ''
               && $_POST['location'] != ''
               && $_POST['cv'] != ''
               && $_POST['sector'] != ''
            ){
                                       echo 'test';

                // set variables
                $username  = $_POST['cUsername'];
                $firstName = $_POST['cFirstName'];
                $lastName = $_POST['cLastName'];
                $email = $_POST['email'];
                $location = $_POST['location'];
                $cv = $_POST['cv'];
                $sector = $_POST['sector'];
                $id = $_POST['user-id'];
                $tbl_name = 'company';

                
                $sql = "UPDATE $tbl_name SET company_name='$username', company_mail='$email', company_location='$location', company_contact_firstname='$firstName', company_contact_lastname='$lastName', company_cv='$cv', company_sector='$sector' WHERE company_id='$id'";
                $result=mysqli_query($con, $sql);

                if($result){
                    header('location:admin.php');
                }
           }      
    }
}

?>