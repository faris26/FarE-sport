<!DOCTYPE html> 
<html lang="en"> 
<head>
 	<meta charset="UTF-8"> 
 	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
 	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
 	<title>Formulaire</title> 
 	<style>
 		label{
 			border: 1px solid red;

 		}



 	</style>
</head> 
<body> 
	<h1>Formulaire GET</h1>
	<form method="get" action="retour.php"> 	
		<label for="name" style="padding-right: 50px; ">Nom :</label>
		<input type="text" name="nom" placeholder="Nom" >
		<br>
		<label for="name" style="padding-right: 33px; ">Prenom :</label>
		<input type="text" name="prenom" placeholder="Prenom">
		<br>
		<label for="name" style="padding-right: 57px; ">Age :</label>
		<input type="text" name="age" placeholder="Age">
		<br>
		<br>
		<input type="submit" value="Envoyer" class="boutton">

	 </form>

	 <h1>Formulaire POST</h1>
	<form method="post" action="retour.php"> 	
		<label for="name" style="padding-right: 50px; ">Nom :</label>
		<input type="text" name="nom" placeholder="Nom" >
		<br>
		<label for="name" style="padding-right: 33px; ">Prenom :</label>
		<input type="text" name="prenom" placeholder="Prenom">
		<br>
		<label for="name" style="padding-right: 57px; ">Age :</label>
		<input type="text" name="age" placeholder="Age">
		<br>
		<br>
		<input type="submit" value="Envoyer" class="boutton">

	 </form>


</body>
 </html>