<?php

/**
 * Dit bestand bevat alles wat word gebruikt zodra je bent ingelogd.
 *
 * @author     Patrick Reijnen <patrickreynen@gmail.com>
 */

	session_start();
	//Kijkt of er is ingelogd,en of er als admin wordt gezocht. zo niet stuurt hij automatisch terug naar de inlog pagina.
	if ($_SESSION["sess_user"] == "admin"){
	if(!isset($_SESSION["sess_user"])) {
		header("location:index.php");
	} else {
?>
<html>
<head>
	<?php include 'head.php'; ?>

</head>
<body>
	<?php include 'header.php'; ?> 
	<?php include 'navigation.php'; ?> 

<div class="container">

		<div  id="beheer" class="profile">
			<div>
				<h4>Beheer Accounts</h4>
			</div>
			<div class="gebruikerItem">
				<span><b>ID</b></span>
				<span><b>Gebruikersnaam</b></span>
				<span><b>Naam</b></span>
				<span><b>E-mail Adres</b></span>
				<span></span>
			</div>
			<?php checkAccounts();?>
		</div>	

		<div id="uploaden" class="profile">
			<div>
				<h4>Importeer CSV bestand "Films die je MOET zien..</h4>
			</div>
			<div>

<!--Script voor importeren CSV bestand-->
<?php

	//CSV importeer stuk
function get_file_extension($file_name) {
	return end(explode('.',$file_name));
}

function errors($error){
	if (!empty($error))
	{
			$i = 0;
			while ($i < count($error)){
			$showError.= '<div class="msg-error">'.$error[$i].'</div>';
			$i ++;}
			return $showError;
	}
} 


if (isset($_POST['upfile'])){
// kijkt of velden zijn ingevuld

if(get_file_extension($_FILES["uploaded"]["name"])!= 'csv')
{
$error[] = 'Je kunt alleen CSV bestanden uploaden';
}

if (!$error){

$tot = 0;
$handle = fopen($_FILES["uploaded"]["tmp_name"], "r");
while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
	for ($c=0; $c < 1; $c++) {

            //slaat de rij over als er toch per ongeluk eerst titel wordt toegevoegd
            if($data[0] !='titel'){
				mysqli_query($mysqli,"INSERT INTO csvdata(
				titel,
				genre
				)VALUES(
					'".$data[0]."',
					'".$data[1]."'
				)")or die(mysql_error());
            }

	$tot++;}
}
fclose($handle);
$content.= "<div class='success' id='message'> CSV bestand succesvol Geïmporteerd, $tot rijen toegevoegd </div>";

}
}
//EOF = Herodocs string,Een heredoc string is het zelfde als dubbele quotes, echter hoef je dan niet te zorgen dat je quotes door elkaar haalt.
$er = errors($error);
$content.= <<<EOF 
<p>Importeer hier "films die je MOET zien.." let op! upload een CSV bestand in de vorm van film,genre (per rij). Zie <a href="downloads/voorbeeld.csv">hier</a> een voorbeeld</p>
<form enctype="multipart/form-data" action="" method="post">
	<input name="uploaded" type="file"  /><input class="loginButton" type="submit" name="upfile" value="Upload File">
</form>
$er
EOF;

echo $content;


?>

			</div>


</body>
</html>

<?php
}} else {
	header("location:index.php");
}
?>


