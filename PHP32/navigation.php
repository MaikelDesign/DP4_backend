<?php
/**
 * Dit bestand bevat alles dat vanaf de navigatie wordt ge-include
 *
 * @author Patrick Reijnen <patrickreynen@student.fontys.nl>
 */
?>
<nav>
	<ul>
		<li><a href="ingelogd.php">Home</a></li>	
		<?php checkAdmin(); ?> <!--bekijkt of er admin items aan het menu toegevoegd moeten worden-->
		<li><a href="contact.php">Contact</a></li>
		<li><a href="logout.php">Uitloggen</a></li>	
	</ul>
	<h5 class="gebruiker">Gebruiker: <?= strip_tags($_SESSION['sess_user']);?></h5>
</nav>

