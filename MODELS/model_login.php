<?php
include 'model_base.php';
start_page('login');

$login=$_POST['login'];
$password=$_POST['mdp'];
$query = "SELECT pseudo,password FROM user WHERE pseudo='$login' and password='$password'";
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
    header('Location:view_index.php');
}
else
{
    header('Location:view_index.php');
}











end_page();
?>