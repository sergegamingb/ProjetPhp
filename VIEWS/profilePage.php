<?php $title ='Profil'; ?>

<?php ob_start(); ?>

<?php
session_start();

?>

<hr>
<div class="container">
    <table class="col-lg-12">

        <tr> <td> Pseudo : <?php $_SESSION['login']  ?> </td> </tr>
        <tr> <td> <a href="view_changePass.html"> Changer mot de passe  </a>          </td>  </tr>
        <tr> <td> Email :  <?php $_SESSION['mail']?>       </td> </tr>
        <tr> <td> Numéro : <?php $_SESSION['phone'] ?>    </td> </tr>
        <tr> <td> Pays : <?php $_SESSION['country']?>      </td> </tr>

    </table>

    <hr>

</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
