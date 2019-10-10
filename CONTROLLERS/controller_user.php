<?php

include '../MODELS/models_user.php';


$action = $_POST['action'];
$mail = $_POST['mail'];
$password = $_POST['mdp'];
$pseudo = $_POST['identifiant'];
$gender = $_POST['genre'];
$phone = $_POST['phone'];
$country = $_POST['pays'];
$state = 'member';

if($action =='inscription')
{

    $user = new User($mail, $password, $pseudo, $gender, $phone, $country, $state);
    $user->register();
}