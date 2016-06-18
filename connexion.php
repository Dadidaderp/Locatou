<!DOCTYPE html>
<?php
?>
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
    
    <?php 
    
        $db = mysql_connect('localhost', 'root', 'root'); 
        mysql_select_db('locatou',$db); 
    
        
        if(isset($_POST) && !empty($_POST['login']) && !empty($_POST['password'])) {
            //$_POST['password'] = hash("sha256", $password);
            extract($_POST);
  
            $sql = "select password from user where login='".$login."'";
            $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
            $data = mysql_fetch_assoc($req);
            
            if($data['password'] != $password) {
                echo '<div class="connexionFailed">
                <fieldset>
                <legend>Echec de connexion</legend>
                </filedset>
                </div>';
                
  } else {
    session_start();
    $_SESSION['login'] = $login;
    
    echo '<div class="connexionSucced">
    <fieldset>
    <strong>Vous etes bien connecté, Redirection dans 5 secondes !</strong> <meta http-equiv="refresh" content="5; URL=index.php">
    </fieldset>
    </div>';
    
  }    
} else {
}
        
        
    ?>   
    
</body>

</html>