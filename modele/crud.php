<?php 
include 'connexion.php';

function test($variable){
	echo $variable;
}
	


function ajouterPersonne($nom, $prenom, $age){
	$sql = "INSERT INTO personne (Nom,Prenom,Age) VALUES ('$nom','$prenom',$age)";
	global $connexion;
	// Executer la requete SQL pour ajouter une personne
	$resultat = mysqli_query($connexion,$sql);
	// verification de l'ajout de notre ligne 
	if ($resultat){
		echo"Personne ajoutée";
	}else{
		echo"Echec de la requete d'ajout";
}
}