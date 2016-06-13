<!DOCTYPE html>
<html>
<head>
	<title>Locatou</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href= "style.css"/>

	<header>
		<p class="titre">
			<a href="index.php"> <img src="images/titre.png" alt="Titre" /> </a>
		</p>
		<div id="login">
		<form method= "post" action="login.php">
			<input type="text" name="login" value="" placeholder="Email"> <input type="password" name="password" value="" placeholder="Password">
			<input type="button" name="inscription.php" value="Inscription" onclick="self.location.href='inscription.html'" style="background-color:#3cb371" style="color:white; font-weight:bold"onclick> <input type="submit" value"Se connecter">
	</div>
	
	<ul id="menu-principal">
	<li><a href="menu_modeles.php">Location</a>
		<ul>
			<li><a href="audi.php">Audi</a></li>
			<li><a href="bmw.php">BMW</a></li>
			<li><a href="mini.php">Mini</a></li>
			<li><a href="nissan.php">Nissan</a></li>
		</ul>
	</li>
	<li><a href="#">A propos</a>
		<ul>
			<li><a href="#">Nous contacter</a></li>
			<li><a href="plan_du_site.php">Nos agences</a></li>
			<li><a href="#">FAQ</a></li>
		</ul>
	</li>
	
</ul>
	
	</header>

</head>
<body>

    <img class="plan_site" src="images/plan_site_toulouse.png" alt="PlanToulouse"/>
    
    </body>
</html>

