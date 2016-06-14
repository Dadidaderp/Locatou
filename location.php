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
                <input type="button" name="inscription.php" value="Inscription" onclick="self.location.href = 'inscription.html'" style="background-color:#3cb371" style="color:white; font-weight:bold"onclick> 
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

<body>

    <br>
    <br>
    <br>


    <div id="location">

        <fieldset>
            <legend>Récaptiulatif de votre commande</legend>
            <?php
            
            
            $link = mysqli_connect("localhost", "root", "root", "locatou");
            
            
            if($_POST['kilometrage'] == 200){
                $_POST['prixBase'] = $_POST[prixBase]*2;
            }
            
            if($_POST['kilometrage'] == 300){
                $_POST['prixBase'] = $_POST[prixBase]*3;
                
            }

            if (mysqli_query($link, "INSERT INTO Contrat(NumeroContrat,PremierJourContrat,DateContrat,DureeLocation,NomConducteur,PrenomConducteur,Kilometrage,PrixTotal) VALUES('','" . $_POST['permierJour'] . "','" . date('Y-m-d') . "','" . $_POST['dureeLocation'] . "','','','" . $_POST['kilometrage']*$_POST['dureeLocation'] . "','" .$_POST['prixBase']*$_POST['dureeLocation']."')")) {


                    if (isset($_POST['dureeLocation']) && isset($_POST['permierJour']) && isset($_POST['moyenPaiment'])) {

                        echo "Marque du véhicule loué : " .$_POST['marque'];
                        echo "<br>";
                        echo "Modele du véhicule loué : " .$_POST['modele'];
                        echo "<br>";
                        echo "<br>";
                        echo "Durée de la location : " . $_POST['dureeLocation'] . " jours";
                        echo "<br>";
                        echo "Premier jour de la location : " . $_POST['permierJour'];
                        echo "<br>";
                        echo "Votre moyen de paiment : " . $_POST['moyenPaiment'];
                        echo "<br>";
                        echo "Kilometrage total : " . $_POST['dureeLocation'] * $_POST['kilometrage'] . " Km";
                        echo "<br>";
                        echo "Prix de la location : " .$_POST['prixBase']*$_POST['dureeLocation'] . " €" ;
                    
                }
            }
            
            ?>

        </fieldset>

    </div>

</body>

</html>
