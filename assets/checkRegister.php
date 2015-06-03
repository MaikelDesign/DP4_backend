<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

session_start();

	require('connectDB.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['username']) 
       && isset($_POST['password']) 
       && isset($_POST['re-password']) 
       && $_POST['username'] != '' 
       && $_POST['password'] != ''
       && $_POST['re-password'] != ''){


            $myusername= $_POST['username']; 
            $mypassword= $_POST['password'];
            $setpassword= $_POST['re-password'];

            $tbl_name = 'users';

            if($mypassword == $setpassword){
        //		$password = md5($mypassword);
                $password = $mypassword;
        //		$datetime=date("y-m-d h:i:s"); //date time

                $exist_sql="SELECT * FROM users WHERE user_name='$myusername'";
                $exist_result=mysqli_query($con, $exist_sql);
                $exist_count=mysqli_num_rows($exist_result);
                
                //if username doesn't exist
                if($exist_count == 0){

                    $sql="INSERT INTO $tbl_name (user_name, user_pass) VALUES('$myusername','$password')";
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
else{
    //error: no post request
    $_SESSION['error'] = 'ERROR: no post is send.';
    header('location:../index.php');    
}



?>