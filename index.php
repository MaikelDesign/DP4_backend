<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

session_start();

//if login not is set or false then normal
if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == false){

    if(isset($_SESSION['error'])){
        echo '<script type="text/javascript"> alert("'.$_SESSION["error"].'");</script>';
    }    
?>   

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- scale for different screen sizes -->
    <title>Build your own city </title>
    <link href="css/stylesheet.css" rel="stylesheet">
    <link href="css/queries.css" rel="stylesheet">
<!--		<link rel="icon" type="image/png" href="images/icon.png"/> icon in url bar -->
    <script src="js/jquery_v1.11.1.js"></script>
    <script src="js/jquery-ui-1.10.4.min.js"></script>
	  <script src="js/js.js"></script>
    <script src="js/script.js"></script>
   </head>
   <body >
       
<!--    login form   -->
    <div id='login_container'>   
        <a href="#" class='close'>X</a>
        <form action="assets/login.php" name="login_form" method="post" id='login_form'>
            LOGIN:<br/>
            Username<input type='text' placeholder="Username" name='username' width="50" required autofocus><br/>
            Password<input type='text' placeholder="Password" name='password' width="50" required><br/>
            <input type="submit" name="submit" value="log-in"><br/>
            <a href="#" id='register'>Sign up</a>
        </form>
        
        <form action="assets/checkRegister.php" name="register_form" method="post" id='register_form'>
            REGISTER User:<br/>
            First name<input type='text' placeholder="First name" name='firstName' width="50" required ><br/>
            Last name<input type='text' placeholder="Last name" name='lastName' width="50" required ><br/>
            Username<input type='text' placeholder="Username" name='username' width="50" required autofocus><br/>
            Password<input type='text' placeholder="Password" name='user-password' width="50" required><br/>
            Retype password<input type='text' placeholder="Retype password" name='user-re-password' width="50" required><br/>
            Mail address<input type='email' placeholder="E-mail" name='email' width="50" required><br/>
<!--        City<input type='text' placeholder="City" name='city' width="50" required><br/>
            Country<input type='text' placeholder="Country" name='country' width="50" required><br/> -->
<!--        About yourself<input type='text' placeholder="info" name='about' width="50" required><br/>-->
<!--        Profile picture:<input type='file' name='FileUpload' required><br/>-->
<!--        CV<input type='text' placeholder="info cv" name='cv' width="50" required><br/>-->
<!--        sector<input type='text' placeholder="Sector" name='sector' width="50" required><br/>-->
            Interests:
            <input type='text' placeholder="tags" name='tags' width="50" required><br/>  
            <input type='text' name='form-type' value='user' hidden>
            <input type="submit" name="submit" value="Sign up"><br/>
            <a href="#" class='form_back'>Back</a>
            <a href="#" id='company'>Company sign up</a>
        </form>
        
        <form action="assets/checkRegister.php" name="register_form" method="post" id='register_form_company'>
            REGISTER company:<br/>
            Username:<input type='text' placeholder="Username" name='com-username' width="50" required ><br/>
            Password<input type='text' placeholder="Password" name='com-password' width="50" required><br/>
            Retype password<input type='text' placeholder="Retype password" name='com-re-password' width="50" required><br/>
            Company name:<input type='text' placeholder="Company name" name='companyName' width="50" required autofocus><br/>
            Mail address<input type='email' placeholder="E-mail" name='com-email' width="50" required><br/>
            Contact person info:<br/>
            First name<input type='text' placeholder="First name" name='firstName' width="50" required ><br/>
            Last name<input type='text' placeholder="Last name" name='lastName' width="50" required ><br/>
<!--        City<input type='text' placeholder="City" name='city' width="50" required><br/>
            Country<input type='text' placeholder="Country" name='country' width="50" required><br/>  -->
<!--        About yourself<input type='text' placeholder="info" name='about' width="50" required><br/>-->
<!--        Company picture:<input type='file' name='FileUpload' required><br/>-->
<!--        CV<input type='text' placeholder="Password" name='password' width="50" required><br/>-->            
<!--        Sector<input type='text' placeholder="Password" name='password' width="50" required><br/>-->        
            <input type='text' name='form-type' value='company' hidden>
            <input type="submit" name="submit" value="Sign up"><br/>
            <a href="#" class='form_back'>Back</a>
            <a href="#" id='user'>User sign up</a>
        </form>
    </div>    
       
<!--    start grid   -->
    <div class="grid">
    <div class="grid-item"><div class="circle"><a href='#' id='login'><img src="img/profiel1.jpg" class="circle"></a></div></div>
    <div class="grid-item grid-item--width2 grid-item--height2"></div>
    <div class="grid-item grid-item--height3"></div>
    <div class="grid-item grid-item--height2"></div>
    <div class="grid-item grid-item--width3"></div>
    <div class="grid-item"></div>
    <div class="grid-item"></div>
    <div class="grid-item grid-item--height2"></div>
    <div class="grid-item grid-item--width2 grid-item--height3"></div>
    <div class="grid-item"></div>
    <div class="grid-item grid-item--height2"></div>
    <div class="grid-item"></div>
    <div class="grid-item grid-item--width2 grid-item--height2"></div>
    <div class="grid-item grid-item--width2"></div>
    <div class="grid-item"></div>
    <div class="grid-item grid-item--height2"></div>
    <div class="grid-item"></div>
    <div class="grid-item"></div>
    <div class="grid-item grid-item--height3"></div>
    <div class="grid-item grid-item--height2"></div>
    <div class="grid-item"></div>
    <div class="grid-item"></div>
    <div class="grid-item grid-item--height2"></div>
    </div>
   </body>
</html>

<?php        
}

//else logged in version
else{
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- scale for different screen sizes -->
    <title>Build your own city | logged in</title>
    <link href="css/stylesheet.css" rel="stylesheet">
    <link href="css/queries.css" rel="stylesheet">
<!--		<link rel="icon" type="image/png" href="images/icon.png"/> icon in url bar -->
    <script src="js/jquery_v1.11.1.js"></script>
    <script src="js/jquery-ui-1.10.4.min.js"></script>
	  <script src="js/js.js"></script>
    <script src="js/script.js"></script>
   </head>
   <body >
    <div class="grid">
    <div class="grid-item" style='background-color:red;'><div class="circle" ><a href='assets/logout.php' id='logout'><img src="img/profiel1.jpg" class="circle"></a></div></div>
    <div class="grid-item grid-item--width2 grid-item--height2"></div>
    <div class="grid-item grid-item--height3"></div>
    <div class="grid-item grid-item--height2"></div>
    <div class="grid-item grid-item--width3"></div>
    <div class="grid-item"></div>
    <div class="grid-item"></div>
    <div class="grid-item grid-item--height2"></div>
    <div class="grid-item grid-item--width2 grid-item--height3"></div>
    <div class="grid-item"></div>
    <div class="grid-item grid-item--height2"></div>
    <div class="grid-item"></div>
    <div class="grid-item grid-item--width2 grid-item--height2"></div>
    <div class="grid-item grid-item--width2"></div>
    <div class="grid-item"></div>
    <div class="grid-item grid-item--height2"></div>
    <div class="grid-item"></div>
    <div class="grid-item"></div>
    <div class="grid-item grid-item--height3"></div>
    <div class="grid-item grid-item--height2"></div>
    <div class="grid-item"></div>
    <div class="grid-item"></div>
    <div class="grid-item grid-item--height2"></div>
    </div>
   </body>
</html>
<?php
}    
    
?>

