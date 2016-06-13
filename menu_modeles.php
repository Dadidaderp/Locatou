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
		<input type="button" name="inscription.php" value="Inscription" onclick="self.location.href='inscription.html'" style="background-color:#3cb371" style="color:white; font-weight:bold"onclick> <input type="submit" value"Se connecter">
	</div>
	
	<ul id="menu-demo2">
	<li><a href="menu_modeles.php">Location</a>
		<ul>
			<li><a href="audi.php">Audi</a></li>
			<li><a href="bmw.php">BMW</a></li>
			<li><a href="#">Ferrari</a></li>
			<li><a href="#">Ford</a></li>
			<li><a href="#">Mercedes</a></li>
			<li><a href="mini.php">Mini</a></li>
			<li><a href="nissan.php">Nissan</a></li>
			<li><a href="#">Porshe</a></li>
			<li><a href="#">Volkswagen</a></li>
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

	<div id="audi-logo">
		<a href="audi.php"> <img class="logo" src="images/audi-logo.png" alt="audi-logo" height="100px"> </a>
	</div>

	<div id="bmw-logo">
	 	<a href="bmw.php"> <img class="logo" src="images/bmw-logo.png" alt="bmw-logo" height="200px"> </a>
	</div>
	
	<div id="ferrari-logo">
		<img class="logo" src="images/ferrari-logo.png" alt="ferrari-logo" height="200px">
	</div>

	<div id="ford-logo">
		<img class="logo" src="images/ford-logo.png" alt="ford-logo" height="120px">
	</div>

	<div id="mercedes-logo">
		<img class="logo" src="images/mercedes-logo.png" alt="mercedes-logo" height="230px">
	</div>

	<div id="mini-logo">
		<a class="logo" href="mini.php"> <img src="images/mini-logo.png" alt="mini-logo" height="180px"> </a>
	</div>

	<div id="nissan-logo">
		<a href="nissan.php"><img class="logo" src="images/nissan-logo.png" alt="nissan-logo" height="200px">
	</div>

	<div id="porshe-logo">
		<img class="logo" src="images/porshe-logo.png" alt="porshe-logo" height="200px">
	</div>

	<div id="volkswagen-logo">
		<img class="logo" src="images/volkswagen-logo.png" alt="volkswagen-logo" height="200px">
	</div>
</body>
</html>