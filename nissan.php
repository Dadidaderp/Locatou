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


<div id="logo-page-nissan">
		<img class="logo" src="images/nissan-logo.png" alt="nissan-logo" height="200px">
	</div>

<div id="nissan-gtr">
	<img src="images/nissan-gtr.png" alt="nissan-gtr" height="300px">
</div>

</body>
</html>