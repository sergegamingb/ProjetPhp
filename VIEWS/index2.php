<?php $title ='FreeNote'; ?>

<?php ob_start(); ?>





<header>
    <img src="images.png" alt="logo" />
    <p class="titre"> FreeNote </p>
    <div class="texte">
        <a class="connecter" href="connection.html" target="_blank">se connecter</a>
        <a class="inscrire" href="inscrire.html"target="_blank">s'inscrire</a>
    </div>
</header>
<footer>
    <p class="copyright"> CopyRight © | FreeNote </p>
    <div class="nom">
        <a class="vincent" href="https://github.com/Vincent-SD" target="_blank"> Vincent Simonneti-Diez</a>
        <a class="alex" href="https://github.com/sergegamingb" target="_blank"> Alexandre Salles</a>
        <a class="ibrahim" href="https://github.com/Ibrahim-Boulahrouz" target="_blank"> Ibrahim Boulahrouz</a>
        <a class="anthony" href="https://github.com/AnthonyZIANE" target="_blank"> Anthony Ziane</a>
        <hr>
        <section class="col-lg-12">
            <div class="row">
                <div class="col-lg-4 text-center"> <a> nouvelle discussion </a> </div>
                <div class="col-lg-5 text-center"> <a> rechercher </a> </div>
                <div class="col-lg-3 text-center"> <a> actualiser </a> </div>
            </div>
            <hr>

            <table class="col-lg-12">
                <tr>
                    <td>Nom de la discussion</td>
                    <td>Statut</td>
                    <td>Dernier message</td>
                    <td>Auteur</td>
                    <td>Date</td>
                </tr>
                <tr>
                    <td>Nom de la discussion</td>
                    <td>Statut</td>
                    <td>Dernier message</td>
                    <td>Auteur</td>
                    <td>Date</td>
                </tr>
                <tr>
                    <td>Nom de la discussion</td>
                    <td>Statut</td>
                    <td>Dernier message</td>
                    <td>Auteur</td>
                    <td>Date</td>
                </tr>
            </table>
            <div class="col-lg-12 text-center">
                <input type="image" alt="previous" src="gauche.jpg" width="30px" height="30px">
                <input type="image" alt="next" src="droite.jpg" width="30px" height="30px" >
            </div>

        </section>

</footer>




<?php $content = ob_get_clean(); ?>

<?php require('template2.php'); ?>
