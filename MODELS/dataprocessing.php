<?php
include 'start_end.php';
start_page('');
$dbHost = 'mysql-tpphp.alwaysdata.net';
$dbUser = 'tpphp';
$pwd = 'EricZemour';
$dbName = 'tpphp_bd';
$dbLink = mysqli_connect($dbHost, $dbUser, $pwd)
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
mysqli_select_db($dbLink , $dbName)
or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
$mailto = 'itsneyraa@outlook.fr';
$today = Date('Y-m-d');
$action = $_POST['action'];
$identifiant = $_POST['Identifiant'];
$email = $_POST['Email'];
$mdp = $_POST['Password'];
$phone = $_POST['Phone'];
$country = $_POST['Country'];
$civ = $_POST['Civ'];
$query = 'INSERT INTO User (Date, Email,Password,Identifiant,Phone,Country,Civ) VALUES (\'' . $today . '\', \'' . $email . '\',\'' . $mdp . '\',\'' . $identifiant . '\',\'' . $phone . '\',\'' . $country . '\',\'' . $civ . '\')';
if(!($dbResult = mysqli_query($dbLink, $query)))
{
    echo 'Erreur dans requête<br />';
// Affiche le type d'erreur.
    echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
// Affiche la requête envoyée.
    echo 'Requête : ' . $query . '<br/>';
    exit();
}
if($action == 'Inscription')
{
    $message = 'Identifiants d\'inscription :' . $identifiant . '<br/>';
    $message .= 'Email : ' . $email . '<br/>';
    $message .= 'Mot de passe : ' . $mdp . '<br/>';
    $message .= 'Téléphone : ' . $phone . '<br/>';
    $message .= 'Pays : ' . $country . '<br/>';
    $message .= 'Civilité : ' . $civ . '<br/>';
    mail($mailto,'Inscription',$message);?>

    Votre message a bien été envoyé !<br/>
    Votre inscription est en cours...<br/>
    Retour à la page d'accueil
    <meta http-equiv="refresh" content="5; url=TD2.php">
    <?php
}
else {
    echo '<br/><strong>Bouton non géré !</strong><br/>';
}
end_page();
?>

