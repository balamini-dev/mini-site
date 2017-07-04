<head>
	<meta charset="utf-8">
</head>

<?php


if(($_POST["new_nom"]) != "" AND ($_POST["new_prenom"]) != "" AND ($_POST["note_p"]) != "" AND ($_POST["note_r"]) != "" AND ($_POST["note_m"]) != "" AND ($_POST["note_a"]) != "")
{
	echo
	"<p> vous avez enregistrer pour l'élève : ".$_POST["new_nom"]. " " .$_POST["new_prenom"]." de la section : ". $_POST["section"]. "</p> 
	<p> programmation : ".$_POST["note_p"]."</p>
	<p> réseau : ".$_POST["note_r"]."</p>
	<p> math : ".$_POST["note_m"]."</p>
	<p> anglais : ".$_POST["note_a"]."</p>";

?>

	<?php
		$sec = $_POST['section'];
		$nom = $_POST['new_nom'];
		$prenom = $_POST['new_prenom'];
		$prog = $_POST['note_p'];
		$res = $_POST['note_r'];
		$math = $_POST['note_m'];
		$angl = $_POST['note_a'];

		$bdd = new mysqli('localhost', 'root', '', 'edf');
		$resultat ="INSERT INTO notes (Section, NOM, PRENOM, NOTE_Programmation, NOTE_Reseau, NOTE_Maths, NOTE_Anglais) VALUES('$sec', '$nom', '$prenom', '$prog', '$res', '$math', '$angl')";
		$ajout = $bdd->query($resultat);
		var_dump($ajout);
}

else 
{
	echo "vous navez rien tapé"; 
}

	?>
<p><a href = "index.php?admin"> Retour à l'écean d'accueil</a></p>



<!-- INSERT INTO `edf`.`notes` (`ID`, `NOM`, `PRENOM`, `NOTE_Programmation`, `NOTE_Réseau`, `NOTE_Maths`, `NOTE_Anglais`) VALUES (NULL, 'Diaby', 'Balamini', '10', '15', '20', '5'); -->