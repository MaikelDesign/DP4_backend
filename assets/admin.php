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

        <div class="container">

            <div>
                <div>
                    <h4>Beheer Profiel</h4><a href="admin.php?edit=true" >Edit</a>
                </div>
                <?php checkUser();?>
            </div>	

        </div>	

    </body>
</html>


