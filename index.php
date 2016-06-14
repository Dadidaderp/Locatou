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
                    <li><a href="contact.php">Nous contacter</a></li>
                        <li><a href="plan_du_site.php">Nos agences</a></li>
                        <li><a href="#">FAQ</a></li>
		</ul>
	</li>
	
</ul>
	
	</header>
<img class="sous_titre" src="images/sous_titre.png" alt="SousTitre">
</head>

<body>
<div class="slideshow">
	<ul>
	<img src="images/titre_modeles.png.png">
		<li><img src="images/audi_s1.png" alt="" width="800" height="400" /></li>
		<li><img src="images/bmw_m6.png"  alt="" width="800" height="400" /></li>
		<li><img src="images/bmw_x6m.png" alt="" width="800" height="400" /></li>
		<li><img src="images/audi_s3.png" alt="" width="800" height="400" /></li>
	</ul>
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
 
<script type="text/javascript">
   $(function(){
      setInterval(function(){
         $(".slideshow ul").animate({marginLeft:-800},800,function(){
            $(this).css({marginLeft:0}).find("li:last").after($(this).find("li:first"));
         })
      }, 3500);
   });
</script>

    <div class="circle">
        Louez votre<br> véhicule<br> a partir de 50e
    </div>

</body>
</html>