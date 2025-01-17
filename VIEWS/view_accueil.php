<?php $title ='FreeNote'; ?>

<?php ob_start(); ?>

<?php
session_start();

?>


<div class="container">

        <section class="col-lg-12">
            <div class="row bbloc">
                <p class="longtext"> Bienvenue sur FreeNote, le nouveau réseau social. Comme ses concurrents,
                    FreeNote est basé sur la communication entre utilisateurs autour de discussions.
                    Mais ce dernier se démarque des autres car les discussions sont limitées, chaque utilisateur peut ajouter au maximum
                    deux mots ce qui permet la création de discussions assez surprenante. Le divertissement est donc la seconde valeur du site,
                    l'amusement est donc fortement possible.En revanche, en cas d'un propos injurieux, des mesures de grandes ampleurs seront prises par nous,
                    les administrateurs. La politesse et la courtoisie sont donc essentielles. On vous souhaite de vous amuser ! </p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                    <a href="../VIEWS/view_discussion.php">
                      <input class="newbouton" type="button" value="Nouvelle Discussion"> </a>
                </div>

                <div class="offset-lg-4 col-lg-4 col-md-4 col-sm-12 text-center">
                    <a href="../VIEWS/view_accueil.php">
                     <input class="refreshbouton" type="button" value="Actualiser"> </a>
                </div>
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
                <input type="image" alt="previous" src="Media/gauche.jpg" width="30px" height="30px">
                <input type="image" alt="next" src="Media/droite.jpg" width="30px" height="30px" >
            </div>

        </section>



</div >

<?php $content = ob_get_clean(); ?>

<?php require('view_template.php'); ?>

