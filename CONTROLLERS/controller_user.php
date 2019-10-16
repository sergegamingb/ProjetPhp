<?php

spl_autoload_register(function ($class_name) {
    include  '../MODELS/models_' . $class_name . '.php';
    include  '../VIEWS/view_' . $class_name . '.php';
});
session_start();
$action = $_POST['action'];

$_SESSION['user']=new user;
$user=$_SESSION['user'];

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