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

</footer>




<?php $content = ob_get_clean(); ?>

<?php require('template2.php'); ?>
