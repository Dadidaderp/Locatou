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
				<input type="text" name="login" value="" placeholder="Email"> <input type="password" name="password" value="" placeholder="Password">
					<br>
					<input type="submit" value"Se connecter">
					<input type="button" name="inscription.php" value="Inscription" onclick="self.location.href='inscription.html'" style="background-color:#3cb371" style="color:white; font-weight:bold"onclick> 
			</form>
		
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
			<li><a href="#">Nos agences</a></li>
			<li><a href="#">FAQ</a></li>
		</ul>
	</li>
	
</ul>
	
	</header>

</head>

<body>

<div id="location">

<?php
	
	$link = mysqli_connect("localhost", "root", "root", "locatou");
	
	if($_POST['premierJour']== "JJ/MM/AAAA"){	
		
		echo "Le champs Date de location désirée n'a pas été renseigné !<br><br>";
		
	}
	
	if($_POST['dureeLocation'] == 0) {
		
		echo "Le champs Durée de la location n'a pas été renseigné !<br><br>";
		
	}
	
	
	if($_POST[''] != "JJ/MM/AAAA" && $_POST['dureeLocation'] != 0){
	
	
		if(mysqli_query($link, "INSERT INTO Contrat(NumeroContrat,PremierJourContrat,DateContrat,DureeLocation,NomConducteur,PrenomConducteur,Kilometrage) VALUES('','".$_POST['permierJour']."','".date('Y-m-d')."','".$_POST['dureeLocation']."','','','')")){
		
			echo "Connexion succed";
		
		} else {
		
			echo "Connexion failed";
		
		}
	
	
	
			echo "<br>";
			echo "<br>";
	
			if(isset($_POST['dureeLocation']) && isset($_POST['permierJour']) && isset($_POST['moyenPaiment']) && isset($_POST['ville'])){
				echo "Recapitulatif de votre commande";
				echo "<br>";
				echo "<br>";
				echo "Durée de la location : " . $_POST['dureeLocation'];
				echo "<br>";
				echo "Premier jour de la location : " .$_POST['permierJour'];
				echo "<br>";
				echo "Votre moyen de paiment : " .$_POST['moyenPaiment'];
				echo "<br>";
				echo "Ville de livraison du vehicule : " .$_POST['ville'];
			} else {
				echo "Oups, vous avez du mal renseigner un champs :(";
			}
		
		}
	
	
?>

</div>


</body>

</html>
