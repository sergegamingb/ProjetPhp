<?php

session_start();
spl_autoload_register(function ($class_name) {
    include  '../MODELS/models_' . $class_name . '.php';
});


?>

<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?></title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/test.css" rel="stylesheet">
    <link rel="stylesheet" href="css/view_style.css">
    <link rel="icon" type="image/png" href="Media/loginFreeNote.png" />
    <style type="text/css">
        .col-lg-8 { line-height: 200px; }
        .col-lg-12 { line-height: 80px; }
    </style>
</head>
<body>
<div class="container">

    <header class="row">
        <div class="col-xs-2 col-lg-2 text-center"> <a href="http://tpphp.alwaysdata.net/ProjetPhp/VIEWS/accueil.php"> <img  alt="logo" src="Media/loginFreeNote.png" style="width: 40%"> </a></div>
        <div class="col-xs-7 col-lg-7 text-center"> <a href="../index.php"> <h1>FreeNote</h1> </a></div>
        <div class="col-xs-2 col-lg-2 text-center form" >
            <?php



            if ($_SESSION['isLogin']!='ok')
            {
                echo '<a class="coin" > se connecter </a>';
            }
            else
            {
                echo ' Bienvenue ' . $_SESSION['login'] . ' !'  ;
            }

            ?>


            <form class="loginmenu" action="../CONTROLLERS/controller_user.php" method="post" >
                <input type="text" name="login"  placeholder="Identifiant"/>
                <input type="password" name="mdp" placeholder="Mot de passe"/>
                <input type="submit" name="action" value="login"/>
            </form>
            <script src="menu_login.js"></script>
        </div >

        <div class="col-xs-1 col-lg-1 text-center form">

            <?php

            if($_SESSION['isLogin'] != 'ok')
            {
                echo '<a class="reg"> s\'inscrire </a>';
            }
            else
            {
                echo '<a href="view_profilePage.php"><input class="avatar"  type="image"  alt="avatar"  src="Media/login.png"></a>';
            }

            ?>

            <form class="registerMenu" action="../CONTROLLERS/controller_user.php" method="post">
                <input type="text" placeholder="identifiant" name="identifiant" /> <br>
                <label> sexe </label> <br>
                <input type="radio" value="homme" name="genre" checked/> homme <br>
                <input type="radio" value="femme" name="genre" checked/> femme <br>
                <input type="text" placeholder="mail" name="mail"/>   <br>
                <input type="password" placeholder="mot de passe" name="mdp"/> <br>
                <input type="password" placeholder="confirmer mot de passe" name="cmdp"/> <br>
                <input type="text" placeholder="telephone" name="phone" /> <br>
                <select  name="pays">
                    <option> france </option>
                    <option> espagne </option>
                    <option> nigeria</option>
                    <option> afgranistan </option>
                </select> <br>
                <label> conditions generales </label>
                <input type="checkbox" name="conditions"/> <br>
                <input type="submit" name="action" value="inscription"/> <br>
            </form>
            <script src="menu_login.js"></script>

        </div>
    </header>
</div>

    <div id="contenu">
        <?= $content ?>   <!-- Élément spécifique -->
    </div>

    <footer class="row" >


        <div class ="col-lg-12 text-center"> Copyright © | FreeNote </div>
        <div class="col-lg-3 text-center"> <a href="https://github.com/Vincent-SD" target="_blank">  Vincent Simonetti-Diez </a> </div>
        <div class="col-lg-3 text-center"> <a href="https://github.com/sergegamingb" target="_blank"> Alexandre Salles  </a> </div>
        <div class="col-lg-3 text-center"> <a href="https://github.com/Ibrahim-Boulahrouz" target="_blank">  Ibrahim Bouhlarouz </a> </div>
        <div class="col-lg-3 text-center"> <a href="https://github.com/AnthonyZIANE" target="_blank">  Anthony Ziane </a> </div>


    </footer>

</body>
</html>