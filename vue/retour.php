


<?php
include '../modele/crud.php';

test("je suis");
// $_GET
//echo "<pre>";
//var_dump($_GET);
//echo "</pre>";

//if(empty($_GET['nom']) || empty($_GET["prenom"])|| empty($_GET['age'])){
//	
//	header("location: formulaire.php");
//
//}else{
//	echo $_GET["nom"];
//	echo $_GET["prenom"];
//	echo $_GET["age"];
//}

          
// $_POST

if(isset($_POST)){
	if(empty($_POST['nom']) || empty($_POST["prenom"])|| empty($_POST['age'])){

	header("Location: formulaire.php");

}else{
	echo "<pre>";
	var_dump($_POST);
	echo "</pre>";
	test($_POST["nom"] . "\n" . $_POST["prenom"] . "\n" . $_POST["age"]);
	$nom = $_POST["nom"];
	$prenom = $_POST["prenom"];
	$age = $_POST["age"];
	ajouterPersonne($nom, $prenom, $age);
	// lancer la fonction permettant d'ajouter une personne
	}
	// lancer la fonction avec $_POST ['prenom']

}else{
	header("Location: formulaire.php");
}




     


