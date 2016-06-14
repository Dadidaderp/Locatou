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
                        <br>
			<input type="button" name="inscription.php" value="Inscription" onclick="self.location.href='inscription.html'" style="background-color:#3cb371" style="color:white; font-weight:bold"onclick> <input type="submit" value"Se connecter">
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
<img class="sous_titre" src="images/sous_titre.png" alt="SousTitre">
</head>

<body>
    
    <div class="faq">
         "Quelles sont les conditions à remplir pour pouvoir louer une voiture sur votre site ?"
         <br>
         <br>
        Pour pouvoir louer un véhciule proposé par notre site de location Locatou, il faut :
        - que vous soyez titulaire du permis de conduire depuis plus de 3 ans
        - que vous soyez assuré tout risque   
    </div>
    
    
    
    <div class="faq">
        "Que ce passe t-il si je dépasse le kilométrage prévu initialement sur le contrat ?"
        <br>
        <br>
        Notre systeme de kilométrtage est simple, lorsque vous louez une voiture, les palliers kilométriques sont par 100, allant de 100 à 300 Km par jour.
        Si vous dépassez le kilométrage prévu par jour, vous serrez facturé au pallier supperieur (vallable uniquement si le dépassement de km est conséquant).   
    </div>
    
    <div class="faq">
        "Que se passe t'il si je ramène le véhcule loué en mauvais état ? (Rayures, carrosserie abimé, ...)"
        <br>
        <br>
        Pour commencer, lors de la livraison du véhicule nous vous demandons une caution de 500€ (chèque, liquide ou carte de crédit acceptés).
        Si vous ramenez le véhicule en mauvais état, il faudra en premier lieu contacter votre assurance afin de voir ce qu'ils peuvent prendre en charge.
        Tant que les dommages n'ont pas été remboursés, la caution n'est pas rendu au titulaire du contrat.
        
    </div>
    
</body>

<?php

