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
			<form method="post" action="login.php">
				<input type="text" name="login" value="" placeholder="Email"><br><input type="password" name="password" value="" placeholder="Password">
                                
					<br>
					<input type="submit" value="Se connecter">
					<input type="button" name="inscription.php" value="Inscription" onclick="self.location.href='inscription.html'" style="background-color:#3cb371" style="color:white; font-weight:bold"onclick> 
			</form>
		
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
			<li><a href="contact.php">Nous contacter</a></li>
			<li><a href="plan_du_site.php">Nos agences</a></li>
                        <li><a href="faq.php">FAQ</a></li>
		</ul>
	</li>
	
</ul>
	
	</header>

</head>



<?php

	
	$link = mysqli_connect("localhost", "root", "root", "locatou");
	
	echo '<br>';
	echo '<br>';
	
	if(mysqli_query($link, "INSERT INTO user(CodeClient,MotDePasse,NomClient,PrenomClient,CodePostalClient,AdresseClient,TelephoneClient,MailClient,MoyenPaimentClient,DelaiPaimentClient) 	VALUES('','".$_POST['pass']."','".$_POST['nom']."','".$_POST['prenom']."','".$_POST['codePostal']."','".$_POST['adresse']."','".$_POST['telephone']."','".$_POST['email']."','','')")){
		
		echo '<p class="message">Votre inscription à bien été prise en compte</p>';
		
	} else { 
		
		echo '<p class= "message">Inscription impossible, un compte possèdant cette adresse mail ou numéro de téléphone est déjà existant</p>';
	
	}
	
	echo '<br>';
	echo '<br>';
	
	mysqli_close($link);

	/*if (isset($_POST["pass"]) && isset($_POST["pass2"]) && isset($_POST["email"])) {
		
		
		echo " pass: ".$_POST["pass"];
		echo '<br>';
		echo " pass2: ".$_POST["pass2"];
		echo '<br>';
		echo " email: ".$_POST["email"];
		
	} */
?>

</html>