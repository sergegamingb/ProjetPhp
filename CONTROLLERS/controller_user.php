<?php

spl_autoload_register(function ($class_name) {
    include  '../MODELS/models_' . $class_name . '.php';
});


$action = $_POST['action'];

session_start();
$user=new user;
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