<?php
include "modele/connexion.php";
include "modele/lirdonnée.php";
// include "modele/ecriredonnee.php";

?>

<!DOCTYPE html> 
<html lang="en"> 
<head>
 	<meta charset="UTF-8"> 
 	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
 	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
 	<title>Document</title> 
 	<style type="text/css">
 	*{
 		margin: 0;
 		padding: 0;
 	}
 		table{
 			font-family: arial;
 			border-collapse: collapse;
 			width: 100%;
 			border: 1px solid;
 		}
 		td,th,tr{
 			text-align: center;
 			border: 2px solid;
 			font-weight: bold;
 			font-style: italic;
 		}
 		
 		
 	</style>
</head> 
<body> 
	<a href="vue/formulaire.php"> Go formulaire  </a>
	
	<h1> Retour BDD</h1>
	
<table summary="exemple de tableau">
	<caption style="font-size: 30px; padding-bottom: 10px; font-style: italic; color: #5E2BFF; ">Titre tableau :</caption>
	<tr>
		<th style="background-color: #eac435;">Personne 1 </th>
		<th style="background-color: #345995;">Personne 2</th>
		<th style="background-color: #E40066">Personne 3</th>
		<th style="background-color: #2BD9FE">Personne 4</th>
		<th style="background-color: #CB9CF2">Personne 5</th>
	</tr>
	<tr>
		<td style="background-color: #eac435;">Nom Personne 1</td>
		<td style="background-color: #345995;">Nom Personne 2 </td>
		<td style="background-color: #E40066">Nom Personne 3</td>
		<td style="background-color: #2BD9FE">Nom Personne 4</td>
		<td style="background-color: #CB9CF2">Nom Personne 5</td>
	</tr>
	<tr>
		<td style="background-color: #eac435;">prenom Personne 1</td>
		<td style="background-color: #345995;">prenom Personne 2 </td>
		<td style="background-color: #E40066">prenom Personne 3</td>
		<td style="background-color: #2BD9FE">prenom Personne 4</td>
		<td style="background-color: #CB9CF2">prenom Personne 5</td>
	</tr>
		<tr>
		<td style="background-color: #eac435;">Age Personne 1</td>
		<td style="background-color: #345995;">Age Personne 2 </td>
		<td style="background-color: #E40066">Age Personne 3</td>
		<td style="background-color: #2BD9FE">Age Personne 4</td>
		<td style="background-color: #CB9CF2">Age Personne 5</td>
	</tr>
</table>	


</br>
<table>
	<tr>
		<th> Id </th>
		<th> Prenom</th>
		<th> nom</th>
		<th> Age</th>
	</tr>
	<tr>
		<?php
foreach($tableauRetour as $resultat)

{
	echo "<tr>";
   echo "<td>".$resultat["Id"]."</td>";
   echo "<td>".$resultat["Prenom"]."</td>";
   echo "<td>".$resultat["Nom"]."</td>";
   echo "<td>".$resultat["Age"]."</td>";
   echo "</tr>";

}
?>
	</tr>

	


</table>

	<?php
	echo "<pre>";
	var_dump($tableauRetour);
	echo "</pre>";
	
	?>


</body>
 </html>















