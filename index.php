<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

session_start();

//if login not is set or false then normal
if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == false){

    //if error than show alert
    if(isset($_SESSION['error'])){
        echo '<script type="text/javascript"> alert("'.$_SESSION["error"].'");</script>';
    }    
?>   

<!DOCTYPE html>
<html>
    <head>
        <?php include 'assets/head.php'; ?>
    </head>
    <header>
        <nav>
            <ul>
                <li class="menu1"><a href="#"></a></li>
                <li class="menu2"><a href="#"></a></li>
                <li class="menu3"><a href="#"></a></li>
                <li class="menu4"><a href="#"></a></li>
            </ul>
        </nav>
    </header>  
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
        
<!--    user register form-->
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
        
<!--    company register form-->
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
        <section class="container">
          <div class="grid">
              <div class="grid-item"></div>
              <!--              <div class="grid-item"><div class="circle" ><a href='#' id='login'><div style='background-color: black;' class="circle"></div></a></div></div>-->

              <div class="grid-item grid-item--width2 grid-item--height2 verwijder"></div>
              <div class="grid-item verwijder"></div>
              <div class="grid-item grid-item--width2 grid-item--height2"></div>
              <div class="grid-item verwijder"></div>
              <div class="grid-item verwijder"></div>
              <div class="grid-item grid-item--width3 grid-item--height2"></div>
              <div class="grid-item grid-item--width2 grid-item--height2 verwijder"></div>
              <div class="grid-item"></div>
              <div class="grid-item"></div>
              <!-- 10 -->
              <div class="grid-item grid-item--width2 grid-item--height2"></div>
              <div class="grid-item"></div>
              <div class="grid-item"></div>
              <div class="grid-item grid-item--width2 grid-item--height2"></div>
              <div class="grid-item grid-item--width2 grid-item--height2"></div>
              <div class="grid-item grid-item--height2"></div>
              <div class="grid-item grid-item--width3 grid-item--height3"></div>
              <div class="grid-item verwijder"></div>
              <div class="grid-item"></div>
              <div class="grid-item grid-item--height2"></div>
              <!-- 20 -->
              <div class="grid-item grid-item--width2 grid-item--height2 verwijder"></div>
              <div class="grid-item grid-item--width2 grid-item--height2 verwijder"></div>
              <div class="grid-item grid-item--width3 grid-item--height3"></div>
              <div class="grid-item grid-item--height2"></div>
              <div class="grid-item"></div>
              <div class="grid-item verwijder"></div>
              <div class="grid-item grid-item--height2 verwijder"></div>
          </div> <!-- /grid -->
      </section>
       
   </body>
</html>

<?php        
}

//else logged in version
else{
    //if error than show alert
    if(isset($_SESSION['error'])){
        echo '<script type="text/javascript"> alert("'.$_SESSION["error"].'");</script>';
    }    
    ?>

    <!DOCTYPE html>
    <html>
        <head>
            <?php include 'assets/head.php'; ?>
        </head>
    <?php
    //check if user is 'user' 
    if(isset($_SESSION['user-type']) && $_SESSION['user-type'] == 'user'){
    ?>
        <header>
                <nav>
                    <ul>
                        <li class="menu1"><a href="#"></a></li>
                        <li class="menu2"><a href="#"></a></li>
                        <li class="menu3"><a href="#"></a></li>
                        <li class="menu4"><a href="#"></a></li>
                    </ul>
                </nav>
            </header> 
           <body >

            <section class="container">
            <div class="grid">
            <div class="grid-item" style='background-color:red;'>user<div class="circle" ><a href='assets/logout.php' id='logout'><img src="img/uploads/<?php

             if(isset($_SESSION['profile_pic']) && $_SESSION['profile_pic'] != ''){
                 echo $_SESSION['profile_pic'];
             }else{
                 echo 'default.jpg';
             }

            ?>" class="circle"></a></div></div>
            <div class="grid-item grid-item--width2 grid-item--height2 verwijder"></div>
                <form action="assets/upload_file.php" method="post" enctype="multipart/form-data">
                    Select image to upload:
                    <input type="file" name="file" id="fileToUpload">
                    <input type="submit" value="Upload Image" name="submit">
                </form>

                <?php 

                ?>    

                      <div class="grid-item verwijder"></div>
                      <div class="grid-item grid-item--width2 grid-item--height2"></div>
                      <div class="grid-item verwijder"></div>
                      <div class="grid-item verwijder"></div>
                      <div class="grid-item grid-item--width3 grid-item--height2"></div>
                      <div class="grid-item grid-item--width2 grid-item--height2 verwijder"></div>
                      <div class="grid-item"></div>
                      <div class="grid-item"></div>
                      <!-- 10 -->
                      <div class="grid-item grid-item--width2 grid-item--height2"></div>
                      <div class="grid-item"></div>
                      <div class="grid-item"></div>
                      <div class="grid-item grid-item--width2 grid-item--height2"></div>
                      <div class="grid-item grid-item--width2 grid-item--height2"></div>
                      <div class="grid-item grid-item--height2"></div>
                      <div class="grid-item grid-item--width3 grid-item--height3"></div>
                      <div class="grid-item verwijder"></div>
                      <div class="grid-item"></div>
                      <div class="grid-item grid-item--height2"></div>
                      <!-- 20 -->
                      <div class="grid-item grid-item--width2 grid-item--height2 verwijder"></div>
                      <div class="grid-item grid-item--width2 grid-item--height2 verwijder"></div>
                      <div class="grid-item grid-item--width3 grid-item--height3"></div>
                      <div class="grid-item grid-item--height2"></div>
                      <div class="grid-item"></div>
                      <div class="grid-item verwijder"></div>
                      <div class="grid-item grid-item--height2 verwijder"></div>
                  </div> <!-- /grid -->
              </section>


           </body>
        </html>    

    <?php    
    }
    // check if user is company
    if(isset($_SESSION['user-type']) && $_SESSION['user-type'] == 'company'){
    ?>    
    
            <header>
                <nav>
                    <ul>
                        <li class="menu1"><a href="#"></a></li>
                        <li class="menu2"><a href="#"></a></li>
                        <li class="menu3"><a href="#"></a></li>
                        <li class="menu4"><a href="#"></a></li>
                    </ul>
                </nav>
            </header> 
           <body >

            <section class="container">
            <div class="grid">
                <div class="grid-item" style='background-color:red;'>company<div class="circle" ><a href='assets/logout.php' id='logout'><img src="img/uploads/<?php

             if(isset($_SESSION['profile_pic']) && $_SESSION['profile_pic'] != ''){
                 echo $_SESSION['profile_pic'];
             }else{
                 echo 'default.jpg';
             }

            ?>" class="circle"></a></div></div>
            <div class="grid-item grid-item--width2 grid-item--height2 verwijder"></div>
                <form action="assets/upload_file.php" method="post" enctype="multipart/form-data">
                    Select image to upload:
                    <input type="file" name="file" id="fileToUpload">
                    <input type="submit" value="Upload Image" name="submit">
                </form>

                <?php 

                ?>    

                      <div class="grid-item verwijder"></div>
                      <div class="grid-item grid-item--width2 grid-item--height2"></div>
                      <div class="grid-item verwijder"></div>
                      <div class="grid-item verwijder"></div>
                      <div class="grid-item grid-item--width3 grid-item--height2"></div>
                      <div class="grid-item grid-item--width2 grid-item--height2 verwijder"></div>
                      <div class="grid-item"></div>
                      <div class="grid-item"></div>
                      <!-- 10 -->
                      <div class="grid-item grid-item--width2 grid-item--height2"></div>
                      <div class="grid-item"></div>
                      <div class="grid-item"></div>
                      <div class="grid-item grid-item--width2 grid-item--height2"></div>
                      <div class="grid-item grid-item--width2 grid-item--height2"></div>
                      <div class="grid-item grid-item--height2"></div>
                      <div class="grid-item grid-item--width3 grid-item--height3"></div>
                      <div class="grid-item verwijder"></div>
                      <div class="grid-item"></div>
                      <div class="grid-item grid-item--height2"></div>
                      <!-- 20 -->
                      <div class="grid-item grid-item--width2 grid-item--height2 verwijder"></div>
                      <div class="grid-item grid-item--width2 grid-item--height2 verwijder"></div>
                      <div class="grid-item grid-item--width3 grid-item--height3"></div>
                      <div class="grid-item grid-item--height2"></div>
                      <div class="grid-item"></div>
                      <div class="grid-item verwijder"></div>
                      <div class="grid-item grid-item--height2 verwijder"></div>
                  </div> <!-- /grid -->
              </section>


           </body>
        </html>   

    <?php
    }
}    
?>

