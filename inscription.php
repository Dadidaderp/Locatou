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

</head>



<?php
$link = mysqli_connect("localhost", "root", "root", "locatou");



echo '<br>';
echo '<br>';

if (mysqli_query($link, "INSERT INTO user(CodeClient,NomClient,PrenomClient,CodePostalClient,AdresseClient,TelephoneClient,MailClient,MoyenPaimentClient,DelaiPaimentClient,login,password ) 	VALUES('','" . $_POST['nom'] . "','" . $_POST['prenom'] . "','" . $_POST['codePostal'] . "','" . $_POST['adresse'] . "','" . $_POST['telephone'] . "','" . $_POST['email'] . "','','','".$_POST['login']."','".$_POST['password']."')")) {

    echo '<p class="message">Votre inscription à bien été prise en compte</p>';
} else {

    echo '<p class= "message">Inscription impossible, un compte possèdant cette adresse mail ou numéro de téléphone est déjà existant</p>';
}

echo '<br>';
echo '<br>';

mysqli_close($link);

/* if (isset($_POST["pass"]) && isset($_POST["pass2"]) && isset($_POST["email"])) {


  echo " pass: ".$_POST["pass"];
  echo '<br>';
  echo " pass2: ".$_POST["pass2"];
  echo '<br>';
  echo " email: ".$_POST["email"];

  } */
?>

</html>