<body>
  <div class="jumbotron text-center">
    
	<h1>
	<?php
	if (($_POST["mdp"]=="1234") AND ($_POST["id"]=="Lognes77"))
	{
		echo "Bienvenue " . $_POST["nom"]." ".$_POST["prenom"]." dans l'espace de saisie des notes";?>
	
		<p> </p>

		Votre identifiant est : <?php echo $_POST["id"];?>
		<p> </p>

		Votre mot de passe est : <?php echo $_POST["mdp"];?>
		<p> </p>
	<?php
	}

	else
	{
		header("location: index.php"); 
	}
	?>
	</h1>
	</div>


<div>
<form action="succes-ajout.php" method ="POST">
	<p> <label> Section de l'élve  (*)<input type="text" name="section" class="form0"> </label> </p>
	<p> <label> Nom de l'élve <input type="text" name="new_nom" class="form1"> </label> </p>
	<p> <label> Prénom de l'élève <input type="text" name="new_prenom" class="form2"> </label> </p>
	<p> <label> Note programmation <input type="text" name="note_p" class="form3"> </label> </p>
	<p> <label> Note Réseau <input type="text" name="note_r" class="form4"> </label> </p>
	<p> <label> Note Math <input type="text" name="note_m" class="form5"> </label> </p>
	<p> <label> Note Anglais <input type="text" name="note_a" class="form6"> </label> </p>

	<p> <input class="input" type = "submit" /> </p>
</form>

</div>
</body>



<h3> LEGENDE (*): </h3>	
<p> Administrateur(trice) systèmes et réseaux hétérogènes : ADMIN-R </p>	
<p> BTS Services Informatiques aux Organisations (SIO) - option SISR : SISR </p>	
<p> BTS Services Informatiques aux Organisations (SIO) - option SLAM : SLAM </p>	
<p> Parcours d'accès à la qualification aux métiers de la Maintenance informatique : PAQI </p>	
<p> Parcours d'accès à la qualification métiers de l'informatique et du numérique : PAQN </p>	
<p> Technicien(ne) d'Assistance en Informatique (Titre Professionnel) : TAI</p>	
<p> Virtualisation sous Linux avec KVM  : LINUX-KVM </p>	




<!--
	<label for="country">Section de l'élve (*)</label>
    <select id="country" name="section">
    <option value=" 1">1</option>
    <option value=" 2">2</option>
    <option value=" 3">3</option>
    <option value=" 4">4</option>
    <option value=" 5">5</option>
    <option value=" 6">6</option>
    <option value=" 7">7</option>
    </select>
-->