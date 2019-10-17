<?php

spl_autoload_register(function ($class_name) {
    include  '../MODELS/models_' . $class_name . '.php';
});
session_start();
$action = $_POST['action'];

$_SESSION['user']=new user;


if($action =='inscription')
{

    $_SESSION['user']->register();
}

if($action == 'login')
{
    $_SESSION['user'] -> login();

}

if($action == 'modifier')
{
    $_SESSION['user']->changePassword();
}
