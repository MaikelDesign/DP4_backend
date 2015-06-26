<?php
/**
 * Functions used to change the profile of a company or user.
 *
 * 
 *
 * 
 * @author Patrick Reijnen, Maikel Verbeek, Stef van der Loo, Boris Vellekoop, Sam van de wal
 */

	include'connectDB.php';
	session_start();


?>

<!DOCTYPE html>
<html>
    <head>
        <?php include 'functions.php'; ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- scale for different screen sizes -->
        <title>Build your own city </title>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300,400' rel='stylesheet' type='text/css'>
        <link href="../css/stylesheet.css" rel="stylesheet">
        <link href="../css/queries.css" rel="stylesheet">
    <!--		<link rel="icon" type="image/png" href="images/icon.png"/> icon in url bar -->
        <script src="../js/jquery_v1.11.1.js"></script>
        <script src="../js/jquery-ui-1.10.4.min.js"></script>
          <script src="../js/js.js"></script>

              <script src='http://masonry.desandro.com/masonry.pkgd.js'></script>
    </head>
    <header>
        <nav>
            <ul>
                <li class="menu1"><a href="../index.php" class="knop"><h1 class="tekstHeader3">FEED</h1></a></li>
                <li class="menu2"><a href="../index.php?district=true" class="knop"><h1 class="tekstHeader2">DISTRICT</h1></a></li>
                <li class="menu3"><a href="#" class="knop"><h1 class="tekstHeader"></h1></a></li>
                <li class="menu4"><h1 class="tekstHeader1"><a href="admin.php" class="logimg"><img src="../img/profiel2.jpg" class="profielfoto" ></a><a href="logout.php" class='logknop tekstHeader1'>LOGOUT</a></h1></a></li>
            </ul>
        </nav>
    </header>  
    <body id="admin">


<!--         <div class="container">

            <div>
                <div>
                    <h4>Beheer Profiel</h4><a href="admin.php?edit=true" >Edit</a>
                </div>
            </div> -->	



    <section class="container">
        <div class="grid">
          <div class="profiel">
            <?php 
                checkUser();
                if($_SESSION['user-type'] == 'company'){
            ?>
            <div class="drie">
              <div class="blogs">
                <div class="tabs">
                   <div class="tab">
                       <input type="radio" id="tab-1" name="tab-group-1" checked>
                       <label for="tab-1">Medtronics</label>
                       <div class="content">
                            <p>Als accountmanager voor medici en vrije beroepen ben ik partner in business, waarbij de wensen en behoefte van de cliënt als uitgangspunt worden </p>
                       </div> 
                   </div>
                   <div class="tab">
                       <input type="radio" id="tab-2" name="tab-group-1">
                       <label for="tab-2">PHilips</label>
                       <div class="content">
                           <p>tab 2</p>    
                       </div> 
                   </div>
                    <div class="tab">
                       <input type="radio" id="tab-3" name="tab-group-1">
                       <label for="tab-3">Campus</label>
                       <div class="content">
                           <p>tab 3</p>
                       </div> 
                   </div>    
                </div>
              </div>
              <div class="blogs">
                <div class="tabs">
                  <div class="tab">
                    <input type="radio" id="tab-4" name="tab-group-4" checked>
                    <label for="tab-4">Rajive Puang</label>
                    <div class="content">
                      <p>Dear Rajive,</p>
                      <p> Last week when we met at the meeting, I was quiete intrested what you had to tell me. Where you able to find some time in your agenda?</p>
                      <p>Nice finding you on BYOC </p>
                      <p> sincerly,</p>
                      <p> Freek van Vliet </p>
                      <input value = "type message..."type="text" name="message">
                    </div> 
                  </div>                   
                  <div class="tab">
                    <input type="radio" id="tab-5" name="tab-group-5">
                    <label for="tab-5">William Alberichts</label>
                    <div class="content">
                      <p>tab 2</p>  
                    </div> 
                  </div>
                  <div class="tab">
                    <input type="radio" id="tab-6" name="tab-group-6">
                    <label for="tab-6">Leonardo Ferrari</label>                            
                      <div class="content">
                        <p>tab 3</p>
                      </div> 
                  </div>
                </div>
              </div>
            </div>
              <?PHP 
                }
                else if($_SESSION['user-type'] == 'user'){
              ?>
              <div class="drie">
              <div class="blogs">
                <div class="tabs">
                   <div class="tab">
                       <input type="radio" id="tab-1" name="tab-group-1" checked>
                       <label for="tab-1">Medtronics</label>
                       <div class="content">
                            <p>Als accountmanager voor medici en vrije beroepen ben ik partner in business, waarbij de wensen en behoefte van de cliënt als uitgangspunt worden </p>
                       </div> 
                   </div>
                   <div class="tab">
                       <input type="radio" id="tab-2" name="tab-group-1">
                       <label for="tab-2">Nano Tech</label>
                       <div class="content">
                           <p>tab 2</p>    
                       </div> 
                   </div>
                    <div class="tab">
                       <input type="radio" id="tab-3" name="tab-group-1">
                       <label for="tab-3">Ketelhuis</label>
                       <div class="content">
                           <p>tab 3</p>
                       </div> 
                   </div>    
                </div>
              </div>
              <div class="blogs">
                <div class="tabs">
                  <div class="tab">
                    <input type="radio" id="tab-4" name="tab-group-4" checked>
                    <label for="tab-4">Rajive Puang</label>
                    <div class="content">
                      <p>Dear Rajive,</p>
                      <p> Last week when we met at the meeting, I was quiete intrested what you had to tell me. Where you able to find some time in your agenda?</p>
                      <p>Nice finding you on BYOC </p>
                      <p> sincerly,</p>
                      <p> Freek van Vliet </p>
                      <input value = "type message..."type="text" name="message">
                    </div> 
                  </div>                   
                  <div class="tab">
                    <input type="radio" id="tab-5" name="tab-group-5">
                    <label for="tab-5">William Alberichts</label>
                    <div class="content">
                      <p>tab 2</p>  
                    </div> 
                  </div>
                  <div class="tab">
                    <input type="radio" id="tab-6" name="tab-group-6">
                    <label for="tab-6">Leonardo Ferrari</label>                            
                      <div class="content">
                        <p>tab 3</p>
                      </div> 
                  </div>
                </div>
              </div>
            </div>
              
              <?php } ?>            
          </div>
        </div>
      </div>
  </section>
    <script src="../js/demo.js"></script>
    </body>
</html>


