<?php

function __autoload($discussion)
{
include ( '../MODELS/models_' . $discussion. '.php');
}

?>

<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?></title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/test.css" rel="stylesheet">
    <link rel="stylesheet" href="css/view_style.css">
    <style type="text/css">
        .col-lg-8 { line-height: 200px; }
        .col-lg-12 { line-height: 80px; }
    </style>
</head>
<body>
<div class="container">

    <header class="row">
        <div class="col-xs-2 col-lg-2 text-center"> <img  alt="logo"   src="Media/loginFreeNote.png" style="width: 40%"> </div>
        <div class="col-xs-4 col-lg-4 text-center"> <a href="../index.php"> <h1>FreeNote</h1> </a></div>
        <div class="col-xs-5 col-lg-5 text-center" >
            <?php

            session_start();
            if ($_SESSION['isLogin']!='ok')
            {
                echo '<a class="coin" > se connecter </a>';
            }
            else
            {
                echo ' Bienvenue ' . $_SESSION['login'] . ' !'  ;
                echo '<img  alt="avatar"   src="Media/login.png" style="width: 90%">';
            }

            ?>


            <form class="loginmenu" action="../CONTROLLERS/controller_user.php" method="post" >
                <input type="text" name="login"  placeholder="Identifiant"/>
                <input type="password" name="mdp" placeholder="Mot de passe"/>
                <input type="submit" name="action" value="login"/>
            </form>
            <script src="menu_login.js"></script>
        </div >

        <div class="col-xs-1 col-lg-1 text-center">

            <?php

            if($_SESSION['isLogin'] != 'ok')
            {
                echo '<a class="reg"> s\'inscrire </a>';
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
