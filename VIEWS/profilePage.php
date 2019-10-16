<?php $title ='Profil'; ?>

<?php ob_start(); ?>

<?php
session_start();
$user= new User();

?>


<table class="col-lg-12">
    <tr>
        <td> Pseudo : <?php $_SESSION['login']  ?></td>
        <td>Changer mot de passe  </td>
        <td>Email  <?php $_SESSION['mail']?>  </td>
        <td>Numéro  <?php $_SESSION['phone'] ?>  </td>
        <td>Pays <?php $_SESSION['country']?> </td>

</table>




<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
