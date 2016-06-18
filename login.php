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
            
                
                <br>
                <input type="button" name="inscription" value="Inscription" onclick="self.location.href = 'inscription.html'" style="background-color:#3cb371" style="color:white; font-weight:bold"onclick> 
                <input type="button" name="login" value="Se connecter" onclick="self.location.href='login.php'">
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

    <br>
    <br>
    
    <form method="post" action="connexion.php">
    <fieldset>
    <legend>Connexion</legend>
    
    <label for="pseudo">Pseudo :</label><input name="login" type="text" id="pseudo" autofocus="" required="">
    <br><br>
    <label for="password">Mot de Passe :</label><input type="password" name="password" id="password" autofocus="" required="">
     <p><input class="boutonConnexion" type="submit" value="Connexion" /></p></form>
    </fieldset>
   
     
   
    </body>
    </html>