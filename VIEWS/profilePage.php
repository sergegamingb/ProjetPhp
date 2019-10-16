<?php $title ='Profil'; ?>

<?php ob_start(); ?>

<?php
session_start();

?>


<table class="col-lg-12">

        <tr> Pseudo : <?php $_SESSION['login']  ?></tr>
        <tr>Changer mot de passe  </tr>
        <tr>Email  <?php $_SESSION['mail']?>  </tr>
        <tr>Numéro  <?php $_SESSION['phone'] ?>  </tr>
        <tr>Pays <?php $_SESSION['country']?> </tr>

</table>




<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
