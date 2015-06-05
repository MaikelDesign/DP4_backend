<?php
//login page

error_reporting(E_ALL);
ini_set("display_errors", 1);

session_start();

require('connectDB.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    

    if(isset($_POST['username']) && isset($_POST['password']) && $_POST['username'] != '' && $_POST['password'] != ''){
        $myUsername = $_POST['username'];
        $myPassword = $_POST['password'];
        
        //check in users table
        $sql= "SELECT * FROM users WHERE user_name='$myUsername' and user_pass='$myPassword'";        
        $result=mysqli_query($con, $sql);
        $count=mysqli_num_rows($result); // If result matched $myusername and $mypassword, table row must be 1 row     
        
        if($count == 1){           
            $_SESSION['logged_in'] = true;
            $_SESSION['user-type'] = 'user';

            //data in sessions
            while($row = mysqli_fetch_assoc($result)){
                $_SESSION['profile_pic'] = $row['user_picture'];
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['username'] = $row['user_name'];        
                $_SESSION['password'] = $row['user_pass'];
            }    
            
            header('location:../index.php');
        }else{
            //check in company table
            $com_sql= "SELECT * FROM company WHERE company_name='$myUsername' and company_pass='$myPassword'";        
            $com_result = mysqli_query($con, $com_sql);
            $comcount = mysqli_num_rows($com_result); // If result matched $myusername and $mypassword, table row must be 1 row 
            
            if($comcount == 1){    
                $_SESSION['logged_in'] = true;
                $_SESSION['user-type'] = 'company';

                //set data in sessions
                while($com_row = mysqli_fetch_assoc($com_result)){
                    $_SESSION['profile_pic'] = $com_row['company_window_pic'];
                    $_SESSION['user_id'] = $com_row['company_id'];
                    $_SESSION['username'] = $com_row['company_name'];        
                    $_SESSION['password'] = $com_row['comapny_pass'];
                }    
                
                header('location:../index.php');
            }else{
                $_SESSION['error'] = "ERROR: username and or password doesn't exist";
                header('location:../index.php');
            }
        }
    }else{
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