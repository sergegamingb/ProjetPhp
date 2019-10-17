<?php $title ='Changement de mot de passe';

ob_start();
session_start();






if  ($_SESSION['error'] == "tooshort")
{
  echo  'Le mot de passe doit faire entre 5 et 20 caracteres';
  echo ' <br/>  <a href=../VIEWS/view_changePass.php>  Réessayer </a>   ';
}

if  ($_SESSION['error'] == "notsame")
{
    echo "Les mots de passe ne correspondent pas";
    echo ' <br/>  <a href=../VIEWS/view_accueil.php> Retourner a l\'accueil </a>   ';
}
if  ($_SESSION['error'] == "notcorresponding")
{
    echo"Ancien et nouveau mots de passe différents";
    echo ' <br/>  <a href=../VIEWS/view_changePass.php>  Réessayer </a>   ';
}


if ($_SESSION['error'] =="badnikname")
{
    echo"Mauvais pseudo";
    echo ' <br/>  <a href=../VIEWS/view_accueil.php> Retourner a l\'accueil </a>   ';
}

if ($_SESSION['error'] == "badnickname2")
{
    echo"Mauvais pseudo";
    echo ' <br/>  <a href=../VIEWS/view_accueil.php> Retourner a l\'accueil </a>   ';
}

if($_SESSION['error'] == 'notconnected')
{
    echo "Vous etes pas connecté";
    echo ' <br/>  <a href=../VIEWS/view_changePass.php>  Réessayer </a>   ';

}
 $content = ob_get_clean(); ?>

<?php require('view_template.php'); ?>
