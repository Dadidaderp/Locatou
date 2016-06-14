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

    <div class="louer">



        <form method="post" action="location.php">
            <fieldset>
                <legend>Formulaire de commande</legend>
                <label>Date de location désirée : </label><input type="text" name="permierJour" autofocus="" required="" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01]).(0[1-9]|1[012]).[0-9]{4}"><br>
                <label>Durée de la location en jour : </label><input type="number" name="dureeLocation" autofocus="" required=""><br>
                <label>Kilomètre par jour : </label><select name="kilometrage">
                    <option>100</option>
                    <option>200</option>
                    <option>300</option>
                </select>

                <br>


                <label>Moyen de paiment : </label><select name="moyenPaiment">
                    <optgroup label="Choissiez votre moyen de paiment">
                        <option>Carte bancaire</option>
                        <option>Espèce</option>
                        <option>Chèque</option>
                    </optgroup>
                </select>
                <br>
                <br>

                <input class="boutonCommander" type="submit" value="Commander"/>
            </fieldset> 
        </form>

    </div>
</body>

</html>