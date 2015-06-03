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
        
        
        $sql="SELECT * FROM users WHERE user_name='$myUsername' and user_pass='$myPassword'";        
        $result=mysqli_query($con, $sql);
        $count=mysqli_num_rows($result); // If result matched $myusername and $mypassword, table row must be 1 row 

        if($count == 1){
            $_SESSION['logged_in'] = true;
            header('location:../index.php');
        }else{
            $_SESSION['error'] = "ERROR: username and or password doesn't exist";
            header('location:../index.php');
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