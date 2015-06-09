<?php

/**
 * Dit bestand bevat alles wat word gebruikt zodra je bent ingelogd.
 *
 * @author     Patrick Reijnen <patrickreynen@gmail.com>
 */

	session_start();
	//Kijkt of er is ingelogd,zo niet stuurt hij automatisch terug naar de inlog pagina.
	if(!isset($_SESSION["sess_user"])) {
		header("location:index.php");
	} else{ 
?>
<html>
<head>
	<?php include 'head.php'; ?>

</head>
<body>
	<?php include 'header.php'; ?> 
	<?php include 'navigation.php'; ?> 

<div class="container">

		<div class="profile">
			<div>
				<h4>API Key</h4>
			</div>
			<div>
				<span><?=$_SESSION['api_key'];?></span>
			</div>


		</div>

	<article>

		<div id="rssFeed" class="profile">
			<div>
				<h4>Film en TV Nieuws </h4>
					<form id="filmNieuws" action="" method="POST">
						<select name="type">
							<option type="text" value = "http://www.nu.nl/rss/film" name="type" >NU.nl</option>
							<option type="text" name="type" value="http://feeds.feedburner.com/Filmtotaal-Filmnieuws" >Film Totaal</option>
							<option type="text" value="http://www.cinema.nl/feeds/artikelen/?articleType=NEWS" name="type">Cinema</option>
						</select>
						<input id="filmOk" type="submit" value="OK" name="switch">
					</form>
					</h4>
			</div>
			<?php 

			if(isset($_POST["switch"])){

				rssFeed($_POST['type']);

			} //Laat standaard de Nu.nl Nieuws feed zien.
			rssFeed("http://www.nu.nl/rss/film"); ?> 
		</div>

				<div id="seenfilm" class="profile">
			<div>
				<h4>Films die je MOET zien.. 
					<form action='' method='POST'>
						<?php checkAdminVerwijder(); ?>
					</form>
					<?php
					if(isset($_POST['submit'])){
						$query = "TRUNCATE TABLE csvdata";
						mysqli_query($mysqli, $query);
					}
				?></h4>
			</div>
			<?php 
				filmsZien();
			 ?>
		</div>

		<div id="filmTotaal" class="profile">
			<div>
				<h4>Films op tv <?php echo("<p class='date'>Datum: ".date('d-m-Y')."</p>"); ?></h4>
			</div>
			<?php filmTotaal(); ?>
		</div>



	</article>
</div>
</body>
</html>

<?php
}
?>