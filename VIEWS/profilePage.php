<?php $title ='Profil'; ?>

<?php ob_start(); ?>

<?php
session_start();

?>


<table class="col-lg-12">

    <tr> <td> Pseudo : <?php $_SESSION['login']  ?> </td> </tr>
    <tr> <td> Changer mot de passe </td> </tr>
    <tr> <td> </td>Email  <?php $_SESSION['mail']?> </tr> </tr>
    <tr> <td> Numéro  <?php $_SESSION['phone'] ?> </td> </tr>
    <tr> <td> Pays <?php $_SESSION['country']?> </td> </tr>

</table>




<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
