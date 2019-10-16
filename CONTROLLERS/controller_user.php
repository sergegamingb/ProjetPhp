<?php
session_start();
spl_autoload_register(function ($class_name) {
    include  '../MODELS/models_' . $class_name . '.php';
    include  '../VIEWS/view_' . $class_name . '.php';
});

$action = $_POST['action'];

$user=new user;

if($action =='inscription')
{

    $user->register();
}

if($action == 'login')
{
    $user -> login();
    $_SESSION['user']=$user;

}

if($action == 'modifier')
{
    $user->changePassword();
}