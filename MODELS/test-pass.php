<?php
include 'start_end.php';
session_start();
//Connexion DB
$dbHost = 'mysql-tpphp.alwaysdata.net';
$dbUser = 'tpphp';
$pwd = 'EricZemour';
$dbName = 'tpphp_bd';
$dbLink = mysqli_connect($dbHost, $dbUser, $pwd)
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
mysqli_select_db($dbLink , $dbName)
or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
//Connexion DB
$email = $_POST['Email'];
$mdp = $_POST['Password'];
$connA = 'SELECT Password FROM User WHERE Email = \'' . $email . '\'';
$connB = 'SELECT Email FROM User WHERE Password = \'' . $mdp . '\'';
$dbResultMDP = mysqli_query($dbLink,$connA);
$dbResultMail = mysqli_query($dbLink,$connB);
$DBMDP = mysqli_fetch_assoc($dbResultMDP);
$DBMail = mysqli_fetch_assoc($dbResultMail);
if ($email == '')
{
    header('Location: login.php');
}
if ($mdp == '')
{
    header('Location: login.php');
}
if ($email == $DBMail['Email'])
{
    if ($mdp == $DBMDP['Password'])
    {
        header('Location: welcome.php');
    }
    else
    {
        header('Location: login.php');
    }
}
else
{
    header('Location: login.php');
}
?>