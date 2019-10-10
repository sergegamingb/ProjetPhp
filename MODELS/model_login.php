<?php
include 'model_base.php';
start_page('login');

$login=$_POST['login'];
$password=$_POST['mdp'];
$query = "SELECT pseudo,password FROM USER WHERE pseudo='$login' and password='$password'";
if (!($dbResult = mysqli_query($dbLink, $query))) {
    echo 'Erreur de requête<br/>';
// Affiche le type d'erreur.
    echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
// Affiche la requête envoyée.
    echo 'Requête : ' . $query . '<br/>';
    exit();

//    try {
//        $db->query($query);
//        echo '<br/><strong>bonsoir, votre inscription a bien été enregistrée.</strong><br/>';
//
//        echo ' <br/>  <a href=../index.php> Retourner a l\'accueil </a>   ';
//
//    } catch (PDOException $e) {
//        echo $e->getMessage();
//    }
}
if($dbRow = mysqli_fetch_assoc($dbResult))
{
    header('Location:../VIEWS/view_index.html');
}
else
{
    header('Location:../VIEWS/view_index.html');
}











end_page();
?>