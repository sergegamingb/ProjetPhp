<?php

include '../MODELS/models_user.php';

$action = $_POST['action'];

//


if($action =='inscription')
{

    $user = new User;
    $user->register();
}

if($action == 'login')
{
    $user = new User;
    $user -> login();

}

if($action == 'modifier')
{
    $user = new User;
    $user->changePassword();
}