<head>
	<title> MINI SITE </title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style-minisite.css">
</head>

<body>



<h1> LISTE DES STAGIAIRES DE LA FORMATION <?php if(isset($_GET["PAQN"]))
	{

		echo "<p> (Parcours d'accès à la qualification métiers de l'informatique et du numérique) </p>";
	}

?> </h1>	


<table>
	<th> NOM
	<?php
	echo"
	<a href= mysqli-asc.php> ASC </a>"." ".
	"<a href= mysqli-desc.php> DESC </a>";
	?> </th>

	<th> PRENOM
	<?php
	echo"
	<a href= mysqli-asc.php> ASC </a>". " ".
	"<a href= mysqli-desc.php> DESC </a>";
	?> </th>

	<th> PROGRAMMATION 
	<?php
	echo"
	<a href= mysqli-asc.php> ASC </a>". " ".
	"<a href= mysqli-desc.php> DESC </a>";
	?> </th>

	<th> RESEAU
	<?php
	echo"
	<a href= mysqli-asc.php> ASC </a>". " ".
	"<a href= mysqli-desc.php> DESC </a>";
	?> </th>

	<th> MATHS
	<?php
	echo"
	<a href= mysqli-asc.php> ASC </a>". " ".
	"<a href= mysqli-desc.php> DESC </a>";
	?> </th>

	<th> ANGLAIS
	<?php
	echo"
	<a href= mysqli-asc.php> ASC </a>". " ".
	"<a href= mysqli-desc.php> DESC </a>";
	?> </th>




<?php

	$bdd = mysqli_connect('localhost', 'root', '', 'edf');     # la variable ($bdd) contient la connection à la base de donnée

	$resultat = mysqli_query($bdd,"SELECT*FROM notes WHERE Section = 'PAQN'");     # la variable ($resultat) contient la requete de la table 'notes'

	while($donnees = mysqli_fetch_assoc($resultat))     # dans la variable ($donnees) il y a les données du résultat de la requête qui ont été transformé en un tableau grâce à la fonction :'mysqli_fetch_assoc'. Et avec la boucle while on va pouvoir parcourir toutes ces informations récupéré.
	{
	echo
		"<tr>
			<td> ".$donnees['NOM']." </td>
			<td> ".$donnees['PRENOM']." </td>
			<td> ".$donnees['NOTE_Programmation']." </td>
			<td> ".$donnees['NOTE_Reseau']." </td>
			<td> ".$donnees['NOTE_Maths']." </td>
			<td> ".$donnees['NOTE_Anglais']." </td>
		</tr>";
	}
	mysqli_free_result($resultat);

	?>






</table>

</body>

	<!--	echo
		$donnees['NOM']. " " .$donnees['PRENOM']. " " .$donnees['NOTE_Programmation']. " " .$donnees['NOTE_Reseau']. " " .$donnees['NOTE_Maths']. " " .$donnees['NOTE_Anglais'];
	}
	mysqli_free_result($resultat);

	?>

-->
