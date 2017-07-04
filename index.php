<head>

	<title> MINI SITE </title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style-minisite.css">

</head>


<body>

<header>					<!--défini le haut de page-->
	<h1> MINI SITE </h1>	
</header>

<nav>						<!--défini le menu principal de navigation-->
	<div class="table">
		<ul>
			<li class="menu-ind"> <a href="?accueil">Accueil</a> </li>
			<li class="menu-for"> <a href="?formations">Formations</a> </li>
			<li class="menu-tromb"> <a href="?protfolio">Portfolio</a> </li>
			<li class="menu-adm"> <a href="?admin">Admin</a> </li>
			<li class="menu-con"> <a href="?contact">Contact</a> </li>
		</ul>
	</div>	
</nav>

<div>
	<?php
	if(isset($_GET["accueil"]))
	{
		include("accueil.php");
	}


	if(isset($_GET["formations"]))
	{
		include("formations.php");
	}

	if(isset($_GET["protfolio"]))
	{
		include("portfolio.php");
	}

	if(isset($_GET["admin"]))
	{
		include("admin.php");
	}


	if(isset($_GET["contact"]))
	{
		include("contact.php");
	}
	?>
</div>


<div>
	<?php
	if(isset($_GET["admin-reseau"]))
	{
		include("admin-reseau.php");
	}

	if(isset($_GET["SISR"]))
	{
		include("sisr.php");
	}

	if(isset($_GET["SLAM"]))
	{
		include("slam.php");
	}

	if(isset($_GET["PAQI"]))
	{
		include("paqi.php");
	}

	if(isset($_GET["PAQN"]))
	{
		include("paqn.php");
	}

	if(isset($_GET["TAI"]))
	{
		include("tai.php");
	}

	if(isset($_GET["LKVM"]))
	{
		include("lkvm.php");
	}

	if(isset($_GET["admin_reponse"]))
	{
		include("admin_reponse.php");
	}

	?>
</div>

</body>