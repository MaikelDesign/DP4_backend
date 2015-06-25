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
                <li class="menu1"><a href="#"></a></li>
                <li class="menu2"><a href="#"></a></li>
                <li class="menu3"><a href="#"></a></li>
                <li class="menu4"><a href="#"></a></li>
            </ul>
        </nav>
    </header>  
    <body id="admin">


<!--         <div class="container">

            <div>
                <div>
                    <h4>Beheer Profiel</h4><a href="admin.php?edit=true" >Edit</a>
                </div>
                <?php checkUser();?>
            </div> -->	



<section class="container">
            <div class="grid">
              <div class="profiel">
                <?php checkUser();?>
                <a href='admin.php?edit=true' >Edit Profile</a>
                <div class="drie">
                    <div class="blogs">
                            <div class="tabs">
        
                               <div class="tab">
                                   <input type="radio" id="tab-1" name="tab-group-1" checked>
                                   <label for="tab-1">ICT</label>
                                   
                                   <div class="content">
                                       <p>Blogs Items</p>
                                        <p>You will find blog items here.</p>
                                   </div> 
                               </div>
                                
                               <div class="tab">
                                   <input type="radio" id="tab-2" name="tab-group-1">
                                   <label for="tab-2">ABN AMRO</label>
                                   
                                   <div class="content">
                                       <p>tab 2</p>
                                       
                                   </div> 
                               </div>
                                
                                <div class="tab">
                                   <input type="radio" id="tab-3" name="tab-group-1">
                                   <label for="tab-3">PHILIPS</label>
                                 
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
                                   <label for="tab-4">Martin L.</label>
                                   
                                   <div class="content">
                                       <p>Chat Window</p>
                                        <p>Hello Martin, are you available?</p>
                                   </div> 
                               </div>
                                
                               <div class="tab">
                                   <input type="radio" id="tab-5" name="tab-group-5">
                                   <label for="tab-5">Pete S.</label>
                                   
                                   <div class="content">
                                       <p>tab 2</p>
                                       
                                   </div> 
                               </div>
                                
                                <div class="tab">
                                   <input type="radio" id="tab-6" name="tab-group-6">
                                   <label for="tab-6">Dave P.</label>
                                 
                                   <div class="content">
                                       <p>tab 3</p>
                                   </div> 
                               </div>
                                
                            </div>

                    </div>
                    <div class="input">
                        <input type="text" name="message">
                    </div>

                </div>

              </div>
            </div>
          </div>
      </section>
    <script src="../js/demo.js"></script>
    </body>
</html>


