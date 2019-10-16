<?php $title ='Profil'; ?>

<?php ob_start(); ?>

<?php
session_start();
$pseudo=$_SESSION['user']->getPseudo;
$mail=$_SESSION['user']->getMail;
$phone = $_SESSION['user']->getPhone;
$country = $_SESSION['user']->getCountry;

?>

<hr>
<div class="container">
    <table class="col-lg-12">

        <tr> <td> Pseudo : <?php echo $phone  ?> </td> </tr>
        <tr> <td> <a href="view_changePass.html"> Changer mot de passe  </a>          </td>  </tr>
        <tr> <td> Email :  <?php echo $mail?>       </td> </tr>
        <tr> <td> Numéro : <?php echo $phone ?>    </td> </tr>
        <tr> <td> Pays : <?php echo $country?>      </td> </tr>

    </table>

    <hr>

</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
