<?php
/**
 * All item that got included in the head.
 *
 * @author Patrick Reijnen, Maikel Verbeek, Stef van der Loo, Boris Vellekoop, Sam van de wal
 */

include 'functions.php';
?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- scale for different screen sizes -->
    <title>Build your own city <?php if(isset($_SESSION['user-type'])){echo $_SESSION['user-type'];} ?></title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300,400' rel='stylesheet' type='text/css'>
    <link href="css/stylesheet.css" rel="stylesheet">
    <link href="css/queries.css" rel="stylesheet">
<!--		<link rel="icon" type="image/png" href="images/icon.png"/> icon in url bar -->
    <script src="js/jquery_v1.11.1.js"></script>
    <script src="js/jquery-ui-1.10.4.min.js"></script>
	  <script src="js/js.js"></script>
    <script src='http://masonry.desandro.com/masonry.pkgd.js'></script>
