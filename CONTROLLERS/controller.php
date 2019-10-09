<?php

include '../MODELS/models_user.php';

$action = $_POST['action'];
$dbLink = $GLOBALS['dbLink'];
$action = $_POST['action'];
$email = $_POST['mail'];
$password = $_POST['mdp'];
$identifiant = $_POST['identifiant'];
$telephone = $_POST['phone'];
$pays = $_POST['pays'];
$conditions = 'member';

if($action =='inscription')
{

}