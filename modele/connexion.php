<?php
define("BR", "</br>");
define("HR", "<hr>");
// mise en place de la connexion
//$connect = mysqli_connect("127.0.0.1","root","","_sn1_test");

// declaration des variables pour la connexion

$serveur = "localhost";
$login = "123_data";
$pass = "1809";
$base = "_sn1_test";

// connexion a la base de données

$connexion = mysqli_connect($serveur,$login,$pass,$base);

// verification que la connexion soit faites 

if($connexion){
	echo "connexion ok!".BR;
	echo "Information sur le serveur :".mysqli_get_host_info($connexion).BR;
}else{   
echo "ERREUR".mysqli_connect_error
($connexion);

 }

 // deconnexion de la base de données

 function deco(){
 if(mysqli_close($connexion)){
 	echo "Deconnexion".BR;
 }else{

echo "Echec";
  } }