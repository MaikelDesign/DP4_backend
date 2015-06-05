<?php
//Register page

error_reporting(E_ALL);
ini_set("display_errors", 1);

session_start();

require('connectDB.php');

//if form is post
if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    //if form-type is user
    if(isset($_POST['form-type']) && $_POST['form-type'] == 'user'){
    
        if(isset($_POST['username']) 
           && isset($_POST['user-password']) 
           && isset($_POST['user-re-password']) 
           && isset($_POST['firstName']) 
           && isset($_POST['lastName']) 
           && isset($_POST['email']) 
           && $_POST['username'] != '' 
           && $_POST['user-password'] != ''
           && $_POST['user-re-password'] != ''
           && $_POST['firstName'] != ''
           && $_POST['lastName'] != ''
           && $_POST['email'] != ''
          ){

                //set variables
                $myusername= $_POST['username']; 
                $mypassword= $_POST['user-password'];
                $setpassword= $_POST['user-re-password'];
                $firstName = $_POST['firstName'];
                $lastName = $_POST['lastName'];
                $email = $_POST['email'];
            
                $tbl_name = 'users';

                if($mypassword == $setpassword){
            //		$password = md5($mypassword);
                    $password = $mypassword;
            //		$datetime=date("y-m-d h:i:s"); //date time

                    $exist_sql="SELECT * FROM $tbl_name WHERE user_name='$myusername'";
                    $exist_result=mysqli_query($con, $exist_sql);
                    $exist_count=mysqli_num_rows($exist_result);

                    //if username doesn't exist
                    if($exist_count == 0){

                        $sql="INSERT INTO $tbl_name (user_name, user_pass, user_mail, user_firstname, user_lastname) VALUES('$myusername','$password','$email','$firstName','$lastName')";
                        $result=mysqli_query($con, $sql);

                        if($result){
                            $_SESSION['error'] = 'SUCCESS: Welcome to UDIT!';
                            header('location:../index.php');
                        }else{
                            //error: username already exists
                            $_SESSION['error'] = 'ERROR: Oops! something went wrong :(';
                            header('location:../index.php');
                        }

                    }
                    else{
                        //error: username already exists.
                        $_SESSION['error'] = "ERROR: Username already exists.";
                        header('location:../index.php');
                    }


                }else{
                    //error: passwords aren't the same.
                    $_SESSION['error'] = "ERROR: Passwords are not te same.";
                    header('location:../index.php');
                }	
        }    
        else{
            //error: not all fields are filled;
            $_SESSION['error'] = 'ERROR: fill in all fields';
            header('location:../index.php');
        }    
    }
    
    //if form-type is company
    if(isset($_POST['form-type']) && $_POST['form-type'] == 'company'){
        
         if(isset($_POST['com-username']) 
           && isset($_POST['com-password']) 
           && isset($_POST['com-re-password']) 
           && isset($_POST['companyName']) 
           && isset($_POST['firstName']) 
           && isset($_POST['lastName']) 
           && isset($_POST['com-email']) 
           && $_POST['com-username'] != '' 
           && $_POST['com-password'] != ''
           && $_POST['com-re-password'] != ''
           && $_POST['companyName'] != ''
           && $_POST['firstName'] != ''
           && $_POST['lastName'] != ''
           && $_POST['com-email'] != ''
          ){      
         
                //set variables
                $myusername= $_POST['com-username']; 
                $mypassword= $_POST['com-password'];
                $setpassword= $_POST['com-re-password'];
                $companyName = $_POST['companyName'];
                $firstName = $_POST['firstName'];
                $lastName = $_POST['lastName'];
                $email = $_POST['com-email'];             
         
                $tbl_name = 'company';

                if($mypassword == $setpassword){
            //		$password = md5($mypassword);
                    $password = $mypassword;
            //		$datetime=date("y-m-d h:i:s"); //date time

                    $exist_sql="SELECT * FROM $tbl_name WHERE user_name='$myusername'";
                    $exist_result=mysqli_query($con, $exist_sql);
                    $exist_count=mysqli_num_rows($exist_result);

                    //if username doesn't exist
                    if($exist_count == 0){

                        $sql="INSERT INTO $tbl_name (company_name, company_pass, company_mail, company_contact_firstname, company_contact_lastname) VALUES('$myusername','$password','$email','$firstName','$lastName')";
                        $result=mysqli_query($con, $sql);

                        if($result){
                            $_SESSION['error'] = 'SUCCESS: Welcome to UDIT!';
                            header('location:../index.php');
                        }else{
                            //error: username already exists
                            $_SESSION['error'] = 'ERROR: Oops! something went wrong :(';
                            header('location:../index.php');
                        }

                    }
                    else{
                        //error: username already exists.
                        $_SESSION['error'] = "ERROR: Username already exists.";
                        header('location:../index.php');
                    }


                }else{
                    //error: passwords aren't the same.
                    $_SESSION['error'] = "ERROR: Passwords are not te same.";
                    header('location:../index.php');
                }	
             
             
         }else{
            //error: not all fields are filled;
            $_SESSION['error'] = 'ERROR: fill in all fields';
            header('location:../index.php');
         }  
        
    }
    else{
        //error: form-type is unknown
        $_SESSION['error'] = 'ERROR: form-type is unkown!';
        header('location:../index.php');
    }
}
else{
    //error: no post request
    $_SESSION['error'] = 'ERROR: no post is send.';
    header('location:../index.php');    
}



?>