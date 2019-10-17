<?php $title ='Changement de mot de passe';

ob_start();
session_start();

function __autoload($user)
{
    include ( 'models_' . $user. '.php');
}




if  ($_SESSION['error'] == "tooshort")
{
  echo  'le mot de passe doit faire entre 5 et 20 caracteres';
  echo ' <br/>  <a href=../VIEWS/view_changePass.php>  réessayer </a>   ';
}

if  ($_SESSION['error'] == "notsame")
{
    echo "les mots de passe ne correspondent pas";
    echo ' <br/>  <a href=../VIEWS/view_accueil.php> Retourner a l\'accueil </a>   ';
}
if  ($_SESSION['error'] == "notcorresponding")
{
    echo"ancien et nouveau mots de passe différents";
    echo ' <br/>  <a href=../VIEWS/view_changePass.php>  réessayer </a>   ';
}




 $content = ob_get_clean(); ?>

<?php require('view_template.php'); ?>
