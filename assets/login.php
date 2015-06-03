<?php
//login page

error_reporting(E_ALL);
ini_set("display_errors", 1);

session_start();


require('connectDB.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST'){


    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = 'SELECT * FROM users WHERE user_name = "$username" AND user_pass = "$password"';
        $result=mysqli_query($con, $sql);

        if($result){
            $_SESSION['logged_in'] = true;
            header('location:../index.php');
        }else{
            $_SESSION['error'] = "Username and or password doesn't exist";
            header('location:../index.php');
        }


    }else{
        //error: beide velden zijn niet ingevuld
        $_SESSION['error'] = 'Beiden velden zijn niet ingevuld';
        header('location:../index.php');
    }
    
}
else{
    //error: no post request
    $_SESSION['error'] = 'No post is send.';
    header('location:../index.php');
}

?>