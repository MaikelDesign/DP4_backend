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
                <li class="menu1"><a href="index.php" class="knop"><h1 class="tekstHeader3">FEED</h1></a></li>
                <li class="menu2"><a href="index.php?district=true" class="knop"><h1 class="tekstHeader2">DISTRICT</h1></a></li>
                <li class="menu3"><a href="#" class="knop"><h1 class="tekstHeader"></h1></a></li>
                <li class="menu4"><a href="#" class="knop"><h1 class="tekstHeader4">LOGIN</h1></a></li>
            </ul>
        </nav>
    </header>  
   <body >
       
  <div id='login_container'>  
      <div class="login"> 
        <a href="#" id='close'>X</a>

        
        <form action="assets/login.php" name="login_form" method="post" id='login_form'><p>
            LOGIN:<br/>
            Username<input type='text' placeholder="Username" name='username' width="50" required autofocus><br/>
            Password<input type='text' placeholder="Password" name='password' width="50" required><br/>
            <input type="submit" name="submit" value="log-in"/><br/>
            <a href="#" id='registerProf'>Register Profile</a></p><br/>
            <a href="#" id='registerCom'>Register Company</a></p>
        </form>
      </div>
    
    
<!--    user register form-->
      <div class="register-profile"> 
        <form action="assets/checkRegister.php" name="register_form" method="post" id='register_form'>
            REGISTER User:<br/>
            <input type='text' name='form-type' value="user" hidden ><br/>            
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
            <a href="#" class='userBack'>Back</a><br/>
        </form>
      </div>
    
<!--    company register form-->
    <div class="register-company">
        <form action="assets/checkRegister.php" name="register_form" method="post" id='register_form_company'><p>
            REGISTER company:<br/>
            <input type='text' name='form-type' value="company" hidden ><br/>
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
            <a href="#" class='compBack'>Back</a>
        </form>
    </div>    

</div>
      
<?php if(!isset($_GET['district'])){ ?>    
<!--    start grid   -->   
         <section class="container">
          <div class="grid">
            <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item technologie"><h1 class="smalleTitel">MEDTRONIC</h1></div>
              </div>
              <div class="card__back">
                <div class="grid-item">
              </div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card1 effect__click verwijder">
              <div class="card1__front">
                <div class="grid-item grid-item--width2 grid-item--height2 verwijder vrijetijd"><h1 class="bredeTitel">CYCLING LANE FOR SMART GUYS OPEN</h1></div>
              </div>
              <div class="card1__back">
                <div class="grid-item grid-item--width2 grid-item--height2 verwijder"></div>
              </div>
            </div> <!-- Blokje lang -->

            <div class="card effect__click verwijder">
              <div class="card__front">
                <div class="grid-item creatief"><h1 class="smalleTitel">TAC EINDHOVEN</h1></div>
              </div>
              <div class="card__back">
                <div class="grid-item verwijder"></a>
              </div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card1 effect__click">
              <div class="card1__front">
                <div class="grid-item vrijetijd grid-item--width2 grid-item--height2 persoon"><h1 class="bredeTitel">CAMPUS INDUSTRY CONNECTION</h1></div>
              </div>
              <div class="card1__back">
                <div class="grid-item grid-item--width2 grid-item--height2">
                </div>
              </div>
            </div> <!-- Blokje lang -->

            <div class="card effect__click verwijder">
              <div class="card__front">
                <div class="grid-item verwijder technologie"><h1 class="smalleTitel">CANON</h1></div>
              </div>
              <div class="card__back">
                <div class="grid-item verwijder"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card effect__click verwijder">
              <div class="card__front">
                <div class="grid-item verwijder technologie"><h1 class="smalleTitel">NXP SOFTWARE</h1></div>
              </div>
              <div class="card__back">
                <div class="grid-item verwijder"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card2 effect__click">
              <div class="card2__front">
                <div class="grid-item grid-item--width3 grid-item--height2 technologie"><h1 class="bredeTitel">VAN DER LANDEN</h1></div>
              </div>
              <div class="card2__back">
                <div class="grid-item grid-item--width3 grid-item--height2">
                </div>
              </div>
            </div> <!-- Blokje groot -->

            <div class="card2 effect__click verwijder">
              <div class="card2__front">
                <div class="grid-item grid-item--width3 grid-item--height2 verwijder technologie"><h1 class="bredeTitel">INTEL</h1></div>
              </div>
              <div class="card2__back">
                <div class="grid-item grid-item--width3 grid-item--height2 verwijder"></div>
              </div>
            </div> <!-- Blokje groot -->

            <div class="card1 effect__click verwijder">
              <div class="card1__front">
                <div class="grid-item grid-item--width2 grid-item--height2 verwijder persoon"><h1 class="bredeTitel">STARTUPBOOTCAMP HIGHTECHXL SELECTION DAYS</h1></div>
              </div>
              <div class="card1__back">
                <div class="grid-item grid-item--width2 grid-item--height2 verwijder"></div>
              </div>
            </div> <!-- Blokje lang -->

            <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item wetenschap"><h1 class="smalleTitel">HEALTHCARE</h1></div>
              </div>
              <div class="card__back">
                <div class="grid-item"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item wetenschap"><h1 class="smalleTitel">FALCK</h1></div>
              </div>
              <div class="card__back">
                <div class="grid-item"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card1 effect__click">
              <div class="card1__front">
                 <div class="grid-item grid-item--width2 grid-item--height2 vrijetijd"><h1 class="bredeTitel">HAPPY SUMMER FESTIVAL</h1></div>
              </div>
              <div class="card1__back">
                 <div class="grid-item grid-item--width2 grid-item--height2"></div>
              </div>
            </div> <!-- Blokje lang -->

             <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item technologie"><h1 class="smalleTitel">FAULHABER</h1></div>
              </div>
              <div class="card__back">
                <div class="grid-item"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item creatief"><h1 class="smalleTitel">KONTUR</h1></div>
              </div>
              <div class="card__back">
                <div class="grid-item"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card1 effect__click">
              <div class="card1__front">
                 <div class="grid-item grid-item--width2 grid-item--height2 creatief"><h1 class="bredeTitel">THE DIGITAL FUTURE OF B2B</h1></div>
              </div>
              <div class="card1__back">
                 <div class="grid-item grid-item--width2 grid-item--height2"></div>
              </div>
            </div> <!-- Blokje lang -->

             <div class="card1 effect__click verwijder">
              <div class="card1__front">
                 <div class="grid-item grid-item--width2 grid-item--height2 verwijder vrijetijd"><h1 class="bredeTitel">TOASTMASTERS</h1></div>
              </div>
              <div class="card1__back">
                 <div class="grid-item grid-item--width2 grid-item--height2 verwijder"></div>
              </div>
            </div> <!-- Blokje lang -->

          </div> <!-- /grid -->
      </section>

<?php 
    }
    else if(isset($_GET['district'])){
           
    

?>
<!--if district-->
    
    <section class="container">
          <div class="grid">
            <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item technologie"><h1 class="smalleTitel">PHILIPS</h1></div>
              </div>
              <div class="card__back">
                <div class="grid-item draai"><img src="img/Philips-Logo.png" class="logo"><p class="smalleOnderschrift">With main focus on Health and Well-being, we serve professional and consumer markets through three overlapping sectors: Healthcare Lighting and Consumer Lifestyle.</p><p class="kleinOnderschrift">Here you can read some specific information about this company.</p><a href="pages/company.html" class="readMore1">[READ MORE ...]</a>
              </div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card1 effect__click verwijder">
              <div class="card1__front">
                <div class="grid-item grid-item--width2 grid-item--height2 verwijder vrijetijd"><h1 class="bredeTitel">CYCLING LANE FOR SMART GUYS OPEN</h1></div>
              </div>
              <div class="card1__back">
                <div class="grid-item grid-item--width2 grid-item--height2 verwijder"></div>
              </div>
            </div> <!-- Blokje lang -->

            <div class="card effect__click verwijder">
              <div class="card__front">
                <div class="grid-item technologie"><h1 class="smalleTitel">ANALOG DEVICES</h1></div>
              </div>
              <div class="card__back">
                <div class="grid-item verwijder"></a>
              </div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card1 effect__click">
              <div class="card1__front">
                <div class="grid-item grid-item--width2 grid-item--height2 persoon"><h1 class="bredeTitel">CAMPUS INDUSTRY CONNECTION</h1></div>
              </div>
              <div class="card1__back">
                <div class="grid-item grid-item--width2 grid-item--height2 draai"><h1 class="bredeTitel1">CAMPUS INDUSTRY CONNECTION</h1><p class="smalleOnderschrift">Campus Connection Industry has shown a unique network which R & D engineers working on campus or in the industry meet. Knowledge exchange of technology to foster collaboration and business development in the broadest sense is key.</p><p class="kleinOnderschrift">Here you can read some specific information about this company.</p><a href="pages/company.html" class="readMore">[READ MORE ...]</a>
                </div>
              </div>
            </div> <!-- Blokje lang -->

            <div class="card effect__click verwijder">
              <div class="card__front">
                <div class="grid-item verwijder technologie"><h1 class="smalleTitel">CANON</h1></div>
              </div>
              <div class="card__back">
                <div class="grid-item verwijder"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card effect__click verwijder">
              <div class="card__front">
                <div class="grid-item verwijder technologie"><h1 class="smalleTitel">NXP SOFTWARE</h1></div>
              </div>
              <div class="card__back">
                <div class="grid-item verwijder"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card2 effect__click">
              <div class="card2__front">
                <div class="grid-item grid-item--width3 grid-item--height2 technologie"><h1 class="bredeTitel">VAN DER LANDEN</h1></div>
              </div>
              <div class="card2__back">
                <div class="grid-item grid-item--width3 grid-item--height2 draai"><h1 class="bredeTitel1">VAN DER LANDEN</h1><p class="smalleOnderschrift">As a tier-1 contract manufacturing partner, we at VDL ETG (Enabling Technologies Group), believe that with support of our work the world can create breakthroughs in fighting diseases, develop new energy solutions, study space, understand details of cells and molecules, increase power of communication and even research where it all began with a Big-Bang.</p><p class="kleinOnderschrift">Here you can read some specific information about this company.</p><a href="pages/company.html" class="readMore">[READ MORE ...]</a>
                  <img src="img/maps.png" class="maps">
                </div>
              </div>
            </div> <!-- Blokje groot -->

            <div class="card2 effect__click verwijder">
              <div class="card2__front">
                <div class="grid-item grid-item--width3 grid-item--height2 verwijder technologie"><h1 class="bredeTitel">INTEL</h1></div>
              </div>
              <div class="card2__back">
                <div class="grid-item grid-item--width3 grid-item--height2 verwijder"></div>
              </div>
            </div> <!-- Blokje groot -->

            <div class="card1 effect__click verwijder">
              <div class="card1__front">
                <div class="grid-item grid-item--width2 grid-item--height2 verwijder persoon"><h1 class="bredeTitel">STARTUPBOOTCAMP HIGHTECHXL SELECTION DAYS</h1></div>
              </div>
              <div class="card1__back">
                <div class="grid-item grid-item--width2 grid-item--height2 verwijder"></div>
              </div>
            </div> <!-- Blokje lang -->

            <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item wetenschap"><h1 class="smalleTitel">HEALTHCARE</h1></div>
              </div>
              <div class="card__back">
                <div class="grid-item"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item wetenschap"><h1 class="smalleTitel">FALCK</h1></div>
              </div>
              <div class="card__back">
                <div class="grid-item"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card1 effect__click">
              <div class="card1__front">
                 <div class="grid-item grid-item--width2 grid-item--height2 vrijetijd"><h1 class="bredeTitel">HAPPY SUMMER FESTIVAL</h1></div>
              </div>
              <div class="card1__back">
                 <div class="grid-item grid-item--width2 grid-item--height2"></div>
              </div>
            </div> <!-- Blokje lang -->

             <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item technologie"><h1 class="smalleTitel">FAULHABER</h1></div>
              </div>
              <div class="card__back">
                <div class="grid-item"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item creatief"><h1 class="smalleTitel">KONTUR</h1></div>
              </div>
              <div class="card__back">
                <div class="grid-item"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card1 effect__click">
              <div class="card1__front">
                 <div class="grid-item grid-item--width2 grid-item--height2 creatief"><h1 class="bredeTitel">THE DIGITAL FUTURE OF B2B</h1></div>
              </div>
              <div class="card1__back">
                 <div class="grid-item grid-item--width2 grid-item--height2"></div>
              </div>
            </div> <!-- Blokje lang -->

             <div class="card1 effect__click verwijder">
              <div class="card1__front">
                 <div class="grid-item grid-item--width2 grid-item--height2 verwijder vrijetijd"><h1 class="bredeTitel">TOASTMASTERS</h1></div>
              </div>
              <div class="card1__back">
                 <div class="grid-item grid-item--width2 grid-item--height2 verwijder"></div>
              </div>
            </div> <!-- Blokje lang -->

          </div> <!-- /grid -->
      </section>

<?php } ?>
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
                <li class="menu1"><a href="index.php" class="knop"><h1 class="tekstHeader3">FEED</h1></a></li>
                <li class="menu2"><a href="index.php?district=true" class="knop"><h1 class="tekstHeader2">DISTRICT</h1></a></li>
                <li class="menu3"><a href="#" class="knop"><h1 class="tekstHeader"></h1></a></li>
                <li class="menu4"><h1 class="tekstHeader1"><a href="assets/admin.php" class="logimg"><img src="img/profiel2.jpg" class="profielfoto" ></a><a href="assets/logout.php" class='logknop tekstHeader1'>LOGOUT</a></h1></a></li>
                    </ul>
                </nav>
            </header> 
           <body >  

<!--
                <div class="grid-item" style='background-color:red;'>user<div class="circle" ><a href='assets/admin.php' id='logout'><img src="img/uploads/<?php

//                             if(isset($_SESSION['profile_pic']) && $_SESSION['profile_pic'] != ''){
//                                 echo $_SESSION['profile_pic'];
//                             }else{
//                                 echo 'default.jpg';
//                             }

                            ?>" class="circle"></a>
                                </div>
                                <a href="assets/logout.php">logout</a>
                </div>              
-->
       
<?php if(!isset($_GET['district'])){ ?>    
<!--    start grid   -->   
         <section class="container">
          <div class="grid">
            <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item technologie"><h1 class="smalleTitel">MEDTRONIC</h1></div>
              </div>
              <div class="card__back">
                <div class="grid-item">
              </div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card1 effect__click verwijder">
              <div class="card1__front">
                <div class="grid-item grid-item--width2 grid-item--height2 verwijder vrijetijd"><h1 class="bredeTitel">CYCLING LANE FOR SMART GUYS OPEN</h1></div>
              </div>
              <div class="card1__back">
                <div class="grid-item grid-item--width2 grid-item--height2 verwijder"></div>
              </div>
            </div> <!-- Blokje lang -->

            <div class="card effect__click verwijder">
              <div class="card__front">
                <div class="grid-item creatief"><h1 class="smalleTitel">TAC EINDHOVEN</h1></div>
              </div>
              <div class="card__back">
                <div class="grid-item verwijder"></a>
              </div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card1 effect__click">
              <div class="card1__front">
                <div class="grid-item vrijetijd grid-item--width2 grid-item--height2 persoon"><h1 class="bredeTitel">CAMPUS INDUSTRY CONNECTION</h1></div>
              </div>
              <div class="card1__back">
                <div class="grid-item grid-item--width2 grid-item--height2">
                </div>
              </div>
            </div> <!-- Blokje lang -->

            <div class="card effect__click verwijder">
              <div class="card__front">
                <div class="grid-item verwijder technologie"><h1 class="smalleTitel">CANON</h1></div>
              </div>
              <div class="card__back">
                <div class="grid-item verwijder"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card effect__click verwijder">
              <div class="card__front">
                <div class="grid-item verwijder technologie"><h1 class="smalleTitel">NXP SOFTWARE</h1></div>
              </div>
              <div class="card__back">
                <div class="grid-item verwijder"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card2 effect__click">
              <div class="card2__front">
                <div class="grid-item grid-item--width3 grid-item--height2 technologie"><h1 class="bredeTitel">VAN DER LANDEN</h1></div>
              </div>
              <div class="card2__back">
                <div class="grid-item grid-item--width3 grid-item--height2">
                </div>
              </div>
            </div> <!-- Blokje groot -->

            <div class="card2 effect__click verwijder">
              <div class="card2__front">
                <div class="grid-item grid-item--width3 grid-item--height2 verwijder technologie"><h1 class="bredeTitel">INTEL</h1></div>
              </div>
              <div class="card2__back">
                <div class="grid-item grid-item--width3 grid-item--height2 verwijder"></div>
              </div>
            </div> <!-- Blokje groot -->

            <div class="card1 effect__click verwijder">
              <div class="card1__front">
                <div class="grid-item grid-item--width2 grid-item--height2 verwijder persoon"><h1 class="bredeTitel">STARTUPBOOTCAMP HIGHTECHXL SELECTION DAYS</h1></div>
              </div>
              <div class="card1__back">
                <div class="grid-item grid-item--width2 grid-item--height2 verwijder"></div>
              </div>
            </div> <!-- Blokje lang -->

            <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item wetenschap"><h1 class="smalleTitel">HEALTHCARE</h1></div>
              </div>
              <div class="card__back">
                <div class="grid-item"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item wetenschap"><h1 class="smalleTitel">FALCK</h1></div>
              </div>
              <div class="card__back">
                <div class="grid-item"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card1 effect__click">
              <div class="card1__front">
                 <div class="grid-item grid-item--width2 grid-item--height2 vrijetijd"><h1 class="bredeTitel">HAPPY SUMMER FESTIVAL</h1></div>
              </div>
              <div class="card1__back">
                 <div class="grid-item grid-item--width2 grid-item--height2"></div>
              </div>
            </div> <!-- Blokje lang -->

             <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item technologie"><h1 class="smalleTitel">FAULHABER</h1></div>
              </div>
              <div class="card__back">
                <div class="grid-item"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item creatief"><h1 class="smalleTitel">KONTUR</h1></div>
              </div>
              <div class="card__back">
                <div class="grid-item"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card1 effect__click">
              <div class="card1__front">
                 <div class="grid-item grid-item--width2 grid-item--height2 creatief"><h1 class="bredeTitel">THE DIGITAL FUTURE OF B2B</h1></div>
              </div>
              <div class="card1__back">
                 <div class="grid-item grid-item--width2 grid-item--height2"></div>
              </div>
            </div> <!-- Blokje lang -->

             <div class="card1 effect__click verwijder">
              <div class="card1__front">
                 <div class="grid-item grid-item--width2 grid-item--height2 verwijder vrijetijd"><h1 class="bredeTitel">TOASTMASTERS</h1></div>
              </div>
              <div class="card1__back">
                 <div class="grid-item grid-item--width2 grid-item--height2 verwijder"></div>
              </div>
            </div> <!-- Blokje lang -->

          </div> <!-- /grid -->
      </section>

<?php 
    }
    else if(isset($_GET['district'])){
           
    

?>
<!--if district-->
    
    <section class="container">
          <div class="grid">
            <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item technologie"><h1 class="smalleTitel">PHILIPS</h1></div>
              </div>
              <div class="card__back">
                <div class="grid-item draai"><img src="img/Philips-Logo.png" class="logo"><p class="smalleOnderschrift">With main focus on Health and Well-being, we serve professional and consumer markets through three overlapping sectors: Healthcare Lighting and Consumer Lifestyle.</p><p class="kleinOnderschrift">Here you can read some specific information about this company.</p><a href="pages/company.html" class="readMore1">[READ MORE ...]</a>
              </div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card1 effect__click verwijder">
              <div class="card1__front">
                <div class="grid-item grid-item--width2 grid-item--height2 verwijder vrijetijd"><h1 class="bredeTitel">CYCLING LANE FOR SMART GUYS OPEN</h1></div>
              </div>
              <div class="card1__back">
                <div class="grid-item grid-item--width2 grid-item--height2 verwijder"></div>
              </div>
            </div> <!-- Blokje lang -->

            <div class="card effect__click verwijder">
              <div class="card__front">
                <div class="grid-item technologie"><h1 class="smalleTitel">ANALOG DEVICES</h1></div>
              </div>
              <div class="card__back">
                <div class="grid-item verwijder"></a>
              </div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card1 effect__click">
              <div class="card1__front">
                <div class="grid-item grid-item--width2 grid-item--height2 persoon"><h1 class="bredeTitel">CAMPUS INDUSTRY CONNECTION</h1></div>
              </div>
              <div class="card1__back">
                <div class="grid-item grid-item--width2 grid-item--height2 draai"><h1 class="bredeTitel1">CAMPUS INDUSTRY CONNECTION</h1><p class="smalleOnderschrift">Campus Connection Industry has shown a unique network which R & D engineers working on campus or in the industry meet. Knowledge exchange of technology to foster collaboration and business development in the broadest sense is key.</p><p class="kleinOnderschrift">Here you can read some specific information about this company.</p><a href="pages/company.html" class="readMore">[READ MORE ...]</a>
                </div>
              </div>
            </div> <!-- Blokje lang -->

            <div class="card effect__click verwijder">
              <div class="card__front">
                <div class="grid-item verwijder technologie"><h1 class="smalleTitel">CANON</h1></div>
              </div>
              <div class="card__back">
                <div class="grid-item verwijder"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card effect__click verwijder">
              <div class="card__front">
                <div class="grid-item verwijder technologie"><h1 class="smalleTitel">NXP SOFTWARE</h1></div>
              </div>
              <div class="card__back">
                <div class="grid-item verwijder"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card2 effect__click">
              <div class="card2__front">
                <div class="grid-item grid-item--width3 grid-item--height2 technologie"><h1 class="bredeTitel">VAN DER LANDEN</h1></div>
              </div>
              <div class="card2__back">
                <div class="grid-item grid-item--width3 grid-item--height2 draai"><h1 class="bredeTitel1">VAN DER LANDEN</h1><p class="smalleOnderschrift">As a tier-1 contract manufacturing partner, we at VDL ETG (Enabling Technologies Group), believe that with support of our work the world can create breakthroughs in fighting diseases, develop new energy solutions, study space, understand details of cells and molecules, increase power of communication and even research where it all began with a Big-Bang.</p><p class="kleinOnderschrift">Here you can read some specific information about this company.</p><a href="pages/company.html" class="readMore">[READ MORE ...]</a>
                  <img src="img/maps.png" class="maps">
                </div>
              </div>
            </div> <!-- Blokje groot -->

            <div class="card2 effect__click verwijder">
              <div class="card2__front">
                <div class="grid-item grid-item--width3 grid-item--height2 verwijder technologie"><h1 class="bredeTitel">INTEL</h1></div>
              </div>
              <div class="card2__back">
                <div class="grid-item grid-item--width3 grid-item--height2 verwijder"></div>
              </div>
            </div> <!-- Blokje groot -->

            <div class="card1 effect__click verwijder">
              <div class="card1__front">
                <div class="grid-item grid-item--width2 grid-item--height2 verwijder persoon"><h1 class="bredeTitel">STARTUPBOOTCAMP HIGHTECHXL SELECTION DAYS</h1></div>
              </div>
              <div class="card1__back">
                <div class="grid-item grid-item--width2 grid-item--height2 verwijder"></div>
              </div>
            </div> <!-- Blokje lang -->

            <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item wetenschap"><h1 class="smalleTitel">HEALTHCARE</h1></div>
              </div>
              <div class="card__back">
                <div class="grid-item"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item wetenschap"><h1 class="smalleTitel">FALCK</h1></div>
              </div>
              <div class="card__back">
                <div class="grid-item"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card1 effect__click">
              <div class="card1__front">
                 <div class="grid-item grid-item--width2 grid-item--height2 vrijetijd"><h1 class="bredeTitel">HAPPY SUMMER FESTIVAL</h1></div>
              </div>
              <div class="card1__back">
                 <div class="grid-item grid-item--width2 grid-item--height2"></div>
              </div>
            </div> <!-- Blokje lang -->

             <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item technologie"><h1 class="smalleTitel">FAULHABER</h1></div>
              </div>
              <div class="card__back">
                <div class="grid-item"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item creatief"><h1 class="smalleTitel">KONTUR</h1></div>
              </div>
              <div class="card__back">
                <div class="grid-item"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card1 effect__click">
              <div class="card1__front">
                 <div class="grid-item grid-item--width2 grid-item--height2 creatief"><h1 class="bredeTitel">THE DIGITAL FUTURE OF B2B</h1></div>
              </div>
              <div class="card1__back">
                 <div class="grid-item grid-item--width2 grid-item--height2"></div>
              </div>
            </div> <!-- Blokje lang -->

             <div class="card1 effect__click verwijder">
              <div class="card1__front">
                 <div class="grid-item grid-item--width2 grid-item--height2 verwijder vrijetijd"><h1 class="bredeTitel">TOASTMASTERS</h1></div>
              </div>
              <div class="card1__back">
                 <div class="grid-item grid-item--width2 grid-item--height2 verwijder"></div>
              </div>
            </div> <!-- Blokje lang -->

          </div> <!-- /grid -->
      </section>

<?php } ?>
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
                <li class="menu1"><a href="index.php" class="knop"><h1 class="tekstHeader3">FEED</h1></a></li>
                <li class="menu2"><a href="index.php?district=true" class="knop"><h1 class="tekstHeader2">DISTRICT</h1></a></li>
                        <li class="menu3"><a href="#" class="knop"><h1 class="tekstHeader"></h1></a></li>
                        <li class="menu4">
                            <a href="assets/admin.php" class="knop">
                                <h1 class="tekstHeader1">HI <?php if(isset($_SESSION['username']) && $_SESSION['username'] != ''){ echo $_SESSION['username']; } ?></h1>
                            </a>
                        </li>
                    </ul>
                </nav>
            </header> 
           <body >
 
<!--
                <div class="grid-item" style='background-color:red;'>user<div class="circle" ><a href='assets/admin.php' id='logout'><img src="img/uploads/<?php

//                             if(isset($_SESSION['profile_pic']) && $_SESSION['profile_pic'] != ''){
//                                 echo $_SESSION['profile_pic'];
//                             }else{
//                                 echo 'default.jpg';
//                             }

                            ?>" class="circle"></a>
                                </div>
                                <a href="assets/logout.php">logout</a>
                </div>              
-->

<?php if(!isset($_GET['district'])){ ?>    
<!--    start grid   -->   
         <section class="container">
          <div class="grid">
            <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item technologie"><h1 class="smalleTitel">MEDTRONIC</h1></div>
              </div>
              <div class="card__back">
                <div class="grid-item">
              </div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card1 effect__click verwijder">
              <div class="card1__front">
                <div class="grid-item grid-item--width2 grid-item--height2 verwijder vrijetijd"><h1 class="bredeTitel">CYCLING LANE FOR SMART GUYS OPEN</h1></div>
              </div>
              <div class="card1__back">
                <div class="grid-item grid-item--width2 grid-item--height2 verwijder"></div>
              </div>
            </div> <!-- Blokje lang -->

            <div class="card effect__click verwijder">
              <div class="card__front">
                <div class="grid-item creatief"><h1 class="smalleTitel">TAC EINDHOVEN</h1></div>
              </div>
              <div class="card__back">
                <div class="grid-item verwijder"></a>
              </div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card1 effect__click">
              <div class="card1__front">
                <div class="grid-item vrijetijd grid-item--width2 grid-item--height2 persoon"><h1 class="bredeTitel">CAMPUS INDUSTRY CONNECTION</h1></div>
              </div>
              <div class="card1__back">
                <div class="grid-item grid-item--width2 grid-item--height2">
                </div>
              </div>
            </div> <!-- Blokje lang -->

            <div class="card effect__click verwijder">
              <div class="card__front">
                <div class="grid-item verwijder technologie"><h1 class="smalleTitel">CANON</h1></div>
              </div>
              <div class="card__back">
                <div class="grid-item verwijder"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card effect__click verwijder">
              <div class="card__front">
                <div class="grid-item verwijder technologie"><h1 class="smalleTitel">NXP SOFTWARE</h1></div>
              </div>
              <div class="card__back">
                <div class="grid-item verwijder"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card2 effect__click">
              <div class="card2__front">
                <div class="grid-item grid-item--width3 grid-item--height2 technologie"><h1 class="bredeTitel">VAN DER LANDEN</h1></div>
              </div>
              <div class="card2__back">
                <div class="grid-item grid-item--width3 grid-item--height2">
                </div>
              </div>
            </div> <!-- Blokje groot -->

            <div class="card2 effect__click verwijder">
              <div class="card2__front">
                <div class="grid-item grid-item--width3 grid-item--height2 verwijder technologie"><h1 class="bredeTitel">INTEL</h1></div>
              </div>
              <div class="card2__back">
                <div class="grid-item grid-item--width3 grid-item--height2 verwijder"></div>
              </div>
            </div> <!-- Blokje groot -->

            <div class="card1 effect__click verwijder">
              <div class="card1__front">
                <div class="grid-item grid-item--width2 grid-item--height2 verwijder persoon"><h1 class="bredeTitel">STARTUPBOOTCAMP HIGHTECHXL SELECTION DAYS</h1></div>
              </div>
              <div class="card1__back">
                <div class="grid-item grid-item--width2 grid-item--height2 verwijder"></div>
              </div>
            </div> <!-- Blokje lang -->

            <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item wetenschap"><h1 class="smalleTitel">HEALTHCARE</h1></div>
              </div>
              <div class="card__back">
                <div class="grid-item"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item wetenschap"><h1 class="smalleTitel">FALCK</h1></div>
              </div>
              <div class="card__back">
                <div class="grid-item"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card1 effect__click">
              <div class="card1__front">
                 <div class="grid-item grid-item--width2 grid-item--height2 vrijetijd"><h1 class="bredeTitel">HAPPY SUMMER FESTIVAL</h1></div>
              </div>
              <div class="card1__back">
                 <div class="grid-item grid-item--width2 grid-item--height2"></div>
              </div>
            </div> <!-- Blokje lang -->

             <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item technologie"><h1 class="smalleTitel">FAULHABER</h1></div>
              </div>
              <div class="card__back">
                <div class="grid-item"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item creatief"><h1 class="smalleTitel">KONTUR</h1></div>
              </div>
              <div class="card__back">
                <div class="grid-item"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card1 effect__click">
              <div class="card1__front">
                 <div class="grid-item grid-item--width2 grid-item--height2 creatief"><h1 class="bredeTitel">THE DIGITAL FUTURE OF B2B</h1></div>
              </div>
              <div class="card1__back">
                 <div class="grid-item grid-item--width2 grid-item--height2"></div>
              </div>
            </div> <!-- Blokje lang -->

             <div class="card1 effect__click verwijder">
              <div class="card1__front">
                 <div class="grid-item grid-item--width2 grid-item--height2 verwijder vrijetijd"><h1 class="bredeTitel">TOASTMASTERS</h1></div>
              </div>
              <div class="card1__back">
                 <div class="grid-item grid-item--width2 grid-item--height2 verwijder"></div>
              </div>
            </div> <!-- Blokje lang -->

          </div> <!-- /grid -->
      </section>

<?php 
    }
    else if(isset($_GET['district'])){
           
    

?>
<!--if district-->
    
    <section class="container">
          <div class="grid">
            <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item technologie"><h1 class="smalleTitel">PHILIPS</h1></div>
              </div>
              <div class="card__back">
                <div class="grid-item draai"><img src="img/Philips-Logo.png" class="logo"><p class="smalleOnderschrift">With main focus on Health and Well-being, we serve professional and consumer markets through three overlapping sectors: Healthcare Lighting and Consumer Lifestyle.</p><p class="kleinOnderschrift">Here you can read some specific information about this company.</p><a href="pages/company.html" class="readMore1">[READ MORE ...]</a>
              </div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card1 effect__click verwijder">
              <div class="card1__front">
                <div class="grid-item grid-item--width2 grid-item--height2 verwijder vrijetijd"><h1 class="bredeTitel">CYCLING LANE FOR SMART GUYS OPEN</h1></div>
              </div>
              <div class="card1__back">
                <div class="grid-item grid-item--width2 grid-item--height2 verwijder"></div>
              </div>
            </div> <!-- Blokje lang -->

            <div class="card effect__click verwijder">
              <div class="card__front">
                <div class="grid-item technologie"><h1 class="smalleTitel">ANALOG DEVICES</h1></div>
              </div>
              <div class="card__back">
                <div class="grid-item verwijder"></a>
              </div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card1 effect__click">
              <div class="card1__front">
                <div class="grid-item grid-item--width2 grid-item--height2 persoon"><h1 class="bredeTitel">CAMPUS INDUSTRY CONNECTION</h1></div>
              </div>
              <div class="card1__back">
                <div class="grid-item grid-item--width2 grid-item--height2 draai"><h1 class="bredeTitel1">CAMPUS INDUSTRY CONNECTION</h1><p class="smalleOnderschrift">Campus Connection Industry has shown a unique network which R & D engineers working on campus or in the industry meet. Knowledge exchange of technology to foster collaboration and business development in the broadest sense is key.</p><p class="kleinOnderschrift">Here you can read some specific information about this company.</p><a href="pages/company.html" class="readMore">[READ MORE ...]</a>
                </div>
              </div>
            </div> <!-- Blokje lang -->

            <div class="card effect__click verwijder">
              <div class="card__front">
                <div class="grid-item verwijder technologie"><h1 class="smalleTitel">CANON</h1></div>
              </div>
              <div class="card__back">
                <div class="grid-item verwijder"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card effect__click verwijder">
              <div class="card__front">
                <div class="grid-item verwijder technologie"><h1 class="smalleTitel">NXP SOFTWARE</h1></div>
              </div>
              <div class="card__back">
                <div class="grid-item verwijder"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card2 effect__click">
              <div class="card2__front">
                <div class="grid-item grid-item--width3 grid-item--height2 technologie"><h1 class="bredeTitel">VAN DER LANDEN</h1></div>
              </div>
              <div class="card2__back">
                <div class="grid-item grid-item--width3 grid-item--height2 draai"><h1 class="bredeTitel1">VAN DER LANDEN</h1><p class="smalleOnderschrift">As a tier-1 contract manufacturing partner, we at VDL ETG (Enabling Technologies Group), believe that with support of our work the world can create breakthroughs in fighting diseases, develop new energy solutions, study space, understand details of cells and molecules, increase power of communication and even research where it all began with a Big-Bang.</p><p class="kleinOnderschrift">Here you can read some specific information about this company.</p><a href="pages/company.html" class="readMore">[READ MORE ...]</a>
                  <img src="img/maps.png" class="maps">
                </div>
              </div>
            </div> <!-- Blokje groot -->

            <div class="card2 effect__click verwijder">
              <div class="card2__front">
                <div class="grid-item grid-item--width3 grid-item--height2 verwijder technologie"><h1 class="bredeTitel">INTEL</h1></div>
              </div>
              <div class="card2__back">
                <div class="grid-item grid-item--width3 grid-item--height2 verwijder"></div>
              </div>
            </div> <!-- Blokje groot -->

            <div class="card1 effect__click verwijder">
              <div class="card1__front">
                <div class="grid-item grid-item--width2 grid-item--height2 verwijder persoon"><h1 class="bredeTitel">STARTUPBOOTCAMP HIGHTECHXL SELECTION DAYS</h1></div>
              </div>
              <div class="card1__back">
                <div class="grid-item grid-item--width2 grid-item--height2 verwijder"></div>
              </div>
            </div> <!-- Blokje lang -->

            <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item wetenschap"><h1 class="smalleTitel">HEALTHCARE</h1></div>
              </div>
              <div class="card__back">
                <div class="grid-item"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item wetenschap"><h1 class="smalleTitel">FALCK</h1></div>
              </div>
              <div class="card__back">
                <div class="grid-item"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card1 effect__click">
              <div class="card1__front">
                 <div class="grid-item grid-item--width2 grid-item--height2 vrijetijd"><h1 class="bredeTitel">HAPPY SUMMER FESTIVAL</h1></div>
              </div>
              <div class="card1__back">
                 <div class="grid-item grid-item--width2 grid-item--height2"></div>
              </div>
            </div> <!-- Blokje lang -->

             <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item technologie"><h1 class="smalleTitel">FAULHABER</h1></div>
              </div>
              <div class="card__back">
                <div class="grid-item"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card effect__click">
              <div class="card__front">
                <div class="grid-item creatief"><h1 class="smalleTitel">KONTUR</h1></div>
              </div>
              <div class="card__back">
                <div class="grid-item"></div>
              </div>
            </div> <!-- Blokje vierkant -->

            <div class="card1 effect__click">
              <div class="card1__front">
                 <div class="grid-item grid-item--width2 grid-item--height2 creatief"><h1 class="bredeTitel">THE DIGITAL FUTURE OF B2B</h1></div>
              </div>
              <div class="card1__back">
                 <div class="grid-item grid-item--width2 grid-item--height2"></div>
              </div>
            </div> <!-- Blokje lang -->

             <div class="card1 effect__click verwijder">
              <div class="card1__front">
                 <div class="grid-item grid-item--width2 grid-item--height2 verwijder vrijetijd"><h1 class="bredeTitel">TOASTMASTERS</h1></div>
              </div>
              <div class="card1__back">
                 <div class="grid-item grid-item--width2 grid-item--height2 verwijder"></div>
              </div>
            </div> <!-- Blokje lang -->

          </div> <!-- /grid -->
      </section>

<?php } ?>
        <script src="js/demo.js"></script>
               
           </body>
        </html>   

    <?php
    }
}    
?>

