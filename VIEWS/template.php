<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="style.css" />
    <title><?= $title ?></title>   <!-- Élément spécifique -->
</head>
<body>
<div id="global">
    <div class="container">

        <header class="row">
            <div class="col-xs-2 col-lg-2 text-center"> logo </div>
            <div class="col-xs-7 col-lg-7 text-center"> <h1>FreeNote</h1> </div>
            <div class="col-xs-2 col-lg-2 text-center" >
                <a class="coin" > se connecter </a>

                <form class="loginmenu" action="../CONTROLLERS/controller_user.php" method="post" >
                    <input type="text" name="login"  placeholder="Identifiant"/>
                    <input type="password" name="mdp" placeholder="Mot de passe"/>
                    <input type="submit" name="action" value="login"/>
                </form>
                <script src="menu_login.js"></script>
            </div >

            <div class="col-xs-1 col-lg-1 text-center">
                <a class="reg"> s'inscrire </a>

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


        <div class ="col-lg-12 text-center"> Copyright | FreeNote </div>
        <div class="col-lg-3 text-center"> <a> Vincent Simonetti-Diez </a> </div>
        <div class="col-lg-3 text-center"> <a> Alexandre Salles  </a> </div>
        <div class="col-lg-3 text-center"> <a> Ibrahim Bouhlarouz </a> </div>
        <div class="col-lg-3 text-center"> <a>  Anthony Ziane </a> </div>


    </footer>

</div> <!-- #global -->
</body>
</html>
