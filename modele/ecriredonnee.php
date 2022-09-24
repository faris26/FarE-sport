<?php 
// recuperation des données enregistrer
$nom = 'Durand';
$prenom = 'Nadia';
$age = 31;

// Ecriture de la requete Sql pour ajouter une personne 
$sql = "INSERT INTO personne (Nom,Prenom,Age) VALUES ('$nom','$prenom',$age)";
// Executer la requete SQL pour ajouter une personne
$resultat = mysqli_query($connexion,$sql);
// verification de l'ajout de notre ligne 
if ($resultat){
	echo"Personne ajoutée";
}else{
	echo"Echec de la requete d'ajout";
}

