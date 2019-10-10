<?php
include 'model_base.php';

session_start();

$login = $_POST['login'];
$password = $_POST['mdp'];
$dbLink = $GLOBALS['dbLink'];


$query = "SELECT pseudo , password  FROM USER where USER.pseudo =  '$login'  and USER.password = '$password' ";
if (!($dbResult = mysqli_query($dbLink, $query))) {
    echo 'Erreur de requête<br/>';
// Affiche le type d'erreur.
    echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
// Affiche la requête envoyée.
    echo 'Requête : ' . $query . '<br/>';
    exit();
}
if($dbRow = mysqli_fetch_assoc($dbResult))
{
    $_SESSION['isLogin']='ok';
    $_SESSION['login']=$login;
    $_SESSION['password']=$password;
    header('Location: ../index.php');
}

else
{
    echo 'erreur d\'authentification';
    echo '<br/> <a href="../VIEWS/view_index.html"> retourner au login</a> ';
}
?>



