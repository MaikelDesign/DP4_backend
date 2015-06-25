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
                <li class="menu1"><a href="pages/profiel.html" class="knop"><h1 class="tekstHeader">NEWS</h1></a></li>
                <li class="menu2"><a href="pages.company.html" class="knop"><h1 class="tekstHeader">DISTRICT</h1></a></li>
                <li class="menu3"><a href="#" class="knop"><h1 class="tekstHeader"></h1></a></li>
                <li class="menu4"><a href="#" class="knop"><h1 class="tekstHeader1">LOGIN</h1></a></li>
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
            <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item"><h2>PHILIPS</h2></div>
              </div>
              <div class="card__back">
                    <div class="grid-item draai"><img src="img/philips3.png" width="100%"><h3>With main focus on Health and Well-being, we serve professional and consumer markets through three overlapping sectors:</h3><h3>
                    Healthcare<br/>
                    Lighting and Consumer Lifestyle<a href="pages/company.html">Read more...</a></h3><br/>
                  </div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card1 effect__click">
              <div class="card1__front">
                <div class="grid-item grid-item--width2 grid-item--height2 verwijder"><h4>CYCLING LANE FOR SMART GUYS OPEN</h4></div>
              </div>
              <div class="card1__back">
                <div class="grid-item grid-item--width2 grid-item--height2 verwijder draai"><h3>EINDHOVEN - A new bicycle lanes around Eindhoven opened Thursday. The Slow Lane, as the cycle is called a cycle connection must be for knowledge among the various high-tech industrial parks in the region. <a href="http://www.omroepbrabant.nl/?news/231693982/Fietspad+voor+slimmeriken+geopend+Slowlane+verbindt+hightechbedrijven+rond+Eindhoven.aspx">Read more...</a></h3></div>
              </div>
            </div> <!-- Blokje lang -->

            <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item"><h4>ANALOG</h4></div>
              </div>
              <div class="card__back">
                <div class="grid-item verwijder draai"><img src="img/analog1.png" width="100%"><h3>A better design experience. A more dynamic automotive experience. ADI Automotive Audio Bus (A2B) technology delivers both—enabling high fidelity audio, <a href="http://www.analog.com/en/index.html">Read more...</a></h3><br/>
              </div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card1 effect__click">
              <div class="card1__front">
                <div class="grid-item grid-item--width2 grid-item--height2"></div>
              </div>
              <div class="card1__back">
                <div class="grid-item grid-item--width2 grid-item--height2"></div>
              </div>
            </div> <!-- Blokje lang -->

            <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item verwijder"></div>
              </div>
              <div class="card__back">
                <div class="grid-item verwijder"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item verwijder"></div>
              </div>
              <div class="card__back">
                <div class="grid-item verwijder"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card2 effect__click">
              <div class="card2__front">
                <div class="grid-item grid-item--width3 grid-item--height2"></div>
              </div>
              <div class="card2__back">
                <div class="grid-item grid-item--width3 grid-item--height2"></div>
              </div>
            </div> <!-- Blokje groot -->

            <div class="card2 effect__click">
              <div class="card2__front">
                <div class="grid-item grid-item--width3 grid-item--height2"></div>
              </div>
              <div class="card2__back">
                <div class="grid-item grid-item--width3 grid-item--height2"></div>
              </div>
            </div> <!-- Blokje groot -->

            <div class="card1 effect__click">
              <div class="card1__front">
                <div class="grid-item grid-item--width2 grid-item--height2 verwijder"></div>
              </div>
              <div class="card1__back">
                <div class="grid-item grid-item--width2 grid-item--height2 verwijder"></div>
              </div>
            </div> <!-- Blokje lang -->

            <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item"></div>
              </div>
              <div class="card__back">
                <div class="grid-item"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item"></div>
              </div>
              <div class="card__back">
                <div class="grid-item"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card1 effect__click">
              <div class="card1__front">
                 <div class="grid-item grid-item--width2 grid-item--height2"></div>
              </div>
              <div class="card1__back">
                 <div class="grid-item grid-item--width2 grid-item--height2"></div>
              </div>
            </div> <!-- Blokje lang -->

             <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item"></div>
              </div>
              <div class="card__back">
                <div class="grid-item"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item"></div>
              </div>
              <div class="card__back">
                <div class="grid-item"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card1 effect__click">
              <div class="card1__front">
                 <div class="grid-item grid-item--width2 grid-item--height2"></div>
              </div>
              <div class="card1__back">
                 <div class="grid-item grid-item--width2 grid-item--height2"></div>
              </div>
            </div> <!-- Blokje lang -->

             <div class="card1 effect__click">
              <div class="card1__front">
                 <div class="grid-item grid-item--width2 grid-item--height2"></div>
              </div>
              <div class="card1__back">
                 <div class="grid-item grid-item--width2 grid-item--height2"></div>
              </div>
            </div> <!-- Blokje lang -->
            
          </div> <!-- /grid -->
      </section>
        <script src="js/demo.js"></script>

       
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
                   <li class="menu1"><a href="pages/profiel.html" class="knop"><h1 class="tekstHeader">NEWS</h1></a></li>
                <li class="menu2"><a href="pages.company.html" class="knop"><h1 class="tekstHeader">DISTRICT</h1></a></li>
                <li class="menu3"><a href="#" class="knop"><h1 class="tekstHeader"></h1></a></li>
                <li class="menu4"><a href="#" class="knop"><h1 class="tekstHeader1">LOGIN</h1></a></li>

                    </ul>
                </nav>
            </header> 
           <body >  

<!--    start grid   -->   
        <section class="container">
          <div class="grid">
            <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item" style='background-color:red;'>user<div class="circle" ><a href='assets/admin.php' id='logout'><img src="img/uploads/<?php

                             if(isset($_SESSION['profile_pic']) && $_SESSION['profile_pic'] != ''){
                                 echo $_SESSION['profile_pic'];
                             }else{
                                 echo 'default.jpg';
                             }

                            ?>" class="circle"></a>
                                </div>
                                <a href="assets/logout.php">logout</a>
                </div>              </div>
              <div class="card__back">
                <div class="grid-item"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card1 effect__click">
              <div class="card1__front">
                <div class="grid-item grid-item--width2 grid-item--height2 verwijder"></div>
              </div>
              <div class="card1__back">
                <div class="grid-item grid-item--width2 grid-item--height2 verwijder"></div>
              </div>
            </div> <!-- Blokje lang -->

            <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item verwijder"></div>
              </div>
              <div class="card__back">
                <div class="grid-item verwijder"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card1 effect__click">
              <div class="card1__front">
                <div class="grid-item grid-item--width2 grid-item--height2"></div>
              </div>
              <div class="card1__back">
                <div class="grid-item grid-item--width2 grid-item--height2"></div>
              </div>
            </div> <!-- Blokje lang -->

            <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item verwijder"></div>
              </div>
              <div class="card__back">
                <div class="grid-item verwijder"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item verwijder"></div>
              </div>
              <div class="card__back">
                <div class="grid-item verwijder"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card2 effect__click">
              <div class="card2__front">
                <div class="grid-item grid-item--width3 grid-item--height2"></div>
              </div>
              <div class="card2__back">
                <div class="grid-item grid-item--width3 grid-item--height2"></div>
              </div>
            </div> <!-- Blokje groot -->

            <div class="card2 effect__click">
              <div class="card2__front">
                <div class="grid-item grid-item--width3 grid-item--height2"></div>
              </div>
              <div class="card2__back">
                <div class="grid-item grid-item--width3 grid-item--height2"></div>
              </div>
            </div> <!-- Blokje groot -->

            <div class="card1 effect__click">
              <div class="card1__front">
                <div class="grid-item grid-item--width2 grid-item--height2 verwijder"></div>
              </div>
              <div class="card1__back">
                <div class="grid-item grid-item--width2 grid-item--height2 verwijder"></div>
              </div>
            </div> <!-- Blokje lang -->

            <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item"></div>
              </div>
              <div class="card__back">
                <div class="grid-item"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item"></div>
              </div>
              <div class="card__back">
                <div class="grid-item"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card1 effect__click">
              <div class="card1__front">
                 <div class="grid-item grid-item--width2 grid-item--height2"></div>
              </div>
              <div class="card1__back">
                 <div class="grid-item grid-item--width2 grid-item--height2"></div>
              </div>
            </div> <!-- Blokje lang -->

             <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item"></div>
              </div>
              <div class="card__back">
                <div class="grid-item"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item"></div>
              </div>
              <div class="card__back">
                <div class="grid-item"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card1 effect__click">
              <div class="card1__front">
                 <div class="grid-item grid-item--width2 grid-item--height2"></div>
              </div>
              <div class="card1__back">
                 <div class="grid-item grid-item--width2 grid-item--height2"></div>
              </div>
            </div> <!-- Blokje lang -->

             <div class="card1 effect__click">
              <div class="card1__front">
                 <div class="grid-item grid-item--width2 grid-item--height2"></div>
              </div>
              <div class="card1__back">
                 <div class="grid-item grid-item--width2 grid-item--height2"></div>
              </div>
            </div> <!-- Blokje lang -->
            
          </div> <!-- /grid -->
      </section>


        <script src="js/demo.js"></script>

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
                        <li class="menu1"><a href="pages/profiel.html" class="knop"><h1 class="tekstHeader">NEWS</h1></a></li>
                        <li class="menu2"><a href="pages.company.html" class="knop"><h1 class="tekstHeader">DISTRICT</h1></a></li>
                        <li class="menu3"><a href="#" class="knop"><h1 class="tekstHeader"></h1></a></li>
                        <li class="menu4"><a href="#" class="knop"><h1 class="tekstHeader1">LOGIN</h1></a></li>
                    </ul>
                </nav>
            </header> 
           <body >
           <!--    start grid   -->   
        <section class="container">
          <div class="grid">
            <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item" style='background-color:red;'>user<div class="circle" ><a href='assets/admin.php' id='logout'><img src="img/uploads/<?php

                             if(isset($_SESSION['profile_pic']) && $_SESSION['profile_pic'] != ''){
                                 echo $_SESSION['profile_pic'];
                             }else{
                                 echo 'default.jpg';
                             }

                            ?>" class="circle"></a>
                                </div>
                                <a href="assets/logout.php">logout</a>
                </div>              </div>
              <div class="card__back">
                <div class="grid-item"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card1 effect__click">
              <div class="card1__front">
                <div class="grid-item grid-item--width2 grid-item--height2 verwijder"></div>
              </div>
              <div class="card1__back">
                <div class="grid-item grid-item--width2 grid-item--height2 verwijder"></div>
              </div>
            </div> <!-- Blokje lang -->

            <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item verwijder"></div>
              </div>
              <div class="card__back">
                <div class="grid-item verwijder"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card1 effect__click">
              <div class="card1__front">
                <div class="grid-item grid-item--width2 grid-item--height2"></div>
              </div>
              <div class="card1__back">
                <div class="grid-item grid-item--width2 grid-item--height2"></div>
              </div>
            </div> <!-- Blokje lang -->

            <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item verwijder"></div>
              </div>
              <div class="card__back">
                <div class="grid-item verwijder"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item verwijder"></div>
              </div>
              <div class="card__back">
                <div class="grid-item verwijder"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card2 effect__click">
              <div class="card2__front">
                <div class="grid-item grid-item--width3 grid-item--height2"></div>
              </div>
              <div class="card2__back">
                <div class="grid-item grid-item--width3 grid-item--height2"></div>
              </div>
            </div> <!-- Blokje groot -->

            <div class="card2 effect__click">
              <div class="card2__front">
                <div class="grid-item grid-item--width3 grid-item--height2"></div>
              </div>
              <div class="card2__back">
                <div class="grid-item grid-item--width3 grid-item--height2"></div>
              </div>
            </div> <!-- Blokje groot -->

            <div class="card1 effect__click">
              <div class="card1__front">
                <div class="grid-item grid-item--width2 grid-item--height2 verwijder"></div>
              </div>
              <div class="card1__back">
                <div class="grid-item grid-item--width2 grid-item--height2 verwijder"></div>
              </div>
            </div> <!-- Blokje lang -->

            <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item"></div>
              </div>
              <div class="card__back">
                <div class="grid-item"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item"></div>
              </div>
              <div class="card__back">
                <div class="grid-item"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card1 effect__click">
              <div class="card1__front">
                 <div class="grid-item grid-item--width2 grid-item--height2"></div>
              </div>
              <div class="card1__back">
                 <div class="grid-item grid-item--width2 grid-item--height2"></div>
              </div>
            </div> <!-- Blokje lang -->

             <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item"></div>
              </div>
              <div class="card__back">
                <div class="grid-item"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item"></div>
              </div>
              <div class="card__back">
                <div class="grid-item"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card1 effect__click">
              <div class="card1__front">
                 <div class="grid-item grid-item--width2 grid-item--height2"></div>
              </div>
              <div class="card1__back">
                 <div class="grid-item grid-item--width2 grid-item--height2"></div>
              </div>
            </div> <!-- Blokje lang -->

             <div class="card1 effect__click">
              <div class="card1__front">
                 <div class="grid-item grid-item--width2 grid-item--height2"></div>
              </div>
              <div class="card1__back">
                 <div class="grid-item grid-item--width2 grid-item--height2"></div>
              </div>
            </div> <!-- Blokje lang -->
            
          </div> <!-- /grid -->
      </section>
        <script src="js/demo.js"></script>

           </body>
        </html>   

    <?php
    }
}    
?>

