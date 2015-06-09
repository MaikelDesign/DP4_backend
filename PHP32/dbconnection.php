<?php

/**
 * Dit bestand bevat de gegevens van de database. Deze worden overal weer opgeroepen.
 *
 * @author     Patrick Reijnen <patrickreynen@gmail.com>
 */

/*Definiëer de variablen voor de connectie*/
$db_host = "localhost"; //Hostname
$db_username = "i308810_studie"; //Gebruikersnaam database
$db_password = "studie"; //Wachtwoord database
$db_name = "i308810_studie"; //Naam database

$mysqli = new mysqli($db_host, $db_username, $db_password, $db_name);

/* check connection */
if ($mysqli->connect_errno) {
    die("Connect failed: %s\n");
}

?>