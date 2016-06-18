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
    
    <?php 
    
        $db = mysql_connect('localhost', 'root', 'root'); 
        mysql_select_db('locatou',$db); 
    
        
        if(isset($_POST) && !empty($_POST['login']) && !empty($_POST['password'])) {
            $_POST['password'] = hash("sha256", $_POST['password']);
            extract($_POST);
  
            $sql = "select password from user where login='".$login."'";
            $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
            $data = mysql_fetch_assoc($req);
            
            if($data['password'] != $password) {
                echo '<div class="alert alert-dismissable alert-danger">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>Oh Non !</strong> Mauvais login / password. Merci de recommencer !
                </div>';
  } else {
    session_start();
    $_SESSION['login'] = $login;
    
    echo '<div class="alert alert-dismissable alert-success">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Yes !</strong> Vous etes bien logué, Redirection dans 5 secondes ! <meta http-equiv="refresh" content="5; URL=dashboard">
  </div>';
    // ici vous pouvez afficher un lien pour renvoyer
    // vers la page d'accueil de votre espace membres
    
  }    
} else {
  $champs = '<p><b>(Remplissez tous les champs pour vous connectez !)</b></p>';
}
        
        
    ?>   
    
</body>

</html>