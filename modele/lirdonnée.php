<?php 
// ecriture de la requete de recuperation d'information 
$sql = "SELECT * FROM personne";
// Execution de la requete
$resultat = mysqli_query($connexion, $sql);
// recuperation de la requete 
// if ($resultat){
//	echo "Nombre de personnes : ".mysqli_num_rows($resultat).BR;

//	echo "<pre>";
//	var_dump($resultat);
//	echo "</pre>";

//	echo "<pre>";
//	var_dump($row = mysqli_fetch_assoc($resultat));
//	echo"</pre>";

//	while ($row = mysqli_fetch_assoc($resultat)){
//		//afficher le retour sur toutes les informations	
//		echo " Nom : "
//		. $row["Nom"] 
//		. " et Prénom : "
//		. $row["Prenom"] 
//		. " et Age : "
//		. $row["Age"] .BR;


	//}
//}else{
//	echo "Echec de l'execution".BR;
//}
$tableauRetour = [];
while ($row = mysqli_fetch_array($resultat)){
	array_push($tableauRetour, $row);
}



