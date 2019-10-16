<?php

include '../MODELS/models_user.php';

$action = $_POST['action'];

session_start();
$user=new User;
$_SESSION['user']=$user;


if($action =='inscription')
{

    $user->register();
}

if($action == 'login')
{
    $user -> login();

}

if($action == 'modifier')
{
    $user->changePassword();
}