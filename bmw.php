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
		<input type="text" name="login" value="" placeholder="Username or Email"> <input type="password" name="password" value="" placeholder="Password">
	</div>
	
	<ul id="menu-demo2">
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
			<li><a href="#">Plan des sites</a></li>
			<li><a href="#">FAQ</a></li>
		</ul>
	</li>
	
</ul>
	
	</header>

</head>
<body>

<div id="logo-page-audi">
		<a href="bmw.php"> <img src="images/bmw-logo.png" alt="bmw-logo" height="200px"> </a>
	

<p><img class="bmw" src="images/bmw_m2.png" alt="bmw_m2" height="200px"><br>
<input class="boutonCommander" type="button" name="location.php" value="					Louer ce vehicule					" onclick="self.location.href='louer.php'" onclick><br><br>
	<img class="bmw" src="images/bmw_m3.png" alt="bmw_m3" height="210px"><br>
	<input class="boutonCommander" type="button" name="location.php" value="					Louer ce vehicule					" onclick="self.location.href='louer.php'" onclick><br><br>
	<img class="bmw" src="images/bmw_m6.png" alt="bmw_m6" height="200px"><br>
	<input class="boutonCommander" type="button" name="location.php" value="					Louer ce vehicule					" onclick="self.location.href='louer.php'" onclick><br><br>
	<img class="bmw" src="images/bmw_x6m.png" alt="bmw_x6m" height="200px"><br>
	<input class="boutonCommander" type="button" name="location.php" value="					Louer ce vehicule					" onclick="self.location.href='louer.php'" onclick><br><br>
</div>
</p>

</body>
</html>