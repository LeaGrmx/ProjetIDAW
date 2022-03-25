<?php
// on simule une base de données
$servername = 'localhost';
$username = 'root';
$password = 'root';

//On établit la connexion
$mysqli = mysqli_connect($servername, $username, $password, 'IDAW');

//On vérifie la connexion
if(!$mysqli){
    die('Erreur : ' .mysqli_connect_error());
}
?>
