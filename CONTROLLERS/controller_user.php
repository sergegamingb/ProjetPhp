<?php

spl_autoload_register(function ($class_name) {
    include  '../MODELS/models_' . $class_name . '.php';
});

session_start();
$action = $_POST['action'];

$user=new user;
$disc = new discussion;


if($action =='inscription')
{

    $user->register();
}

if($action == 'login')
{
    $user-> login();

}

if($action == 'modifier')
{
    $user->changePassword();
}

if($action == 'new_discussion')
{
    $disc->createDiscussion();
}

if($action == 'envoyer')
{
    $user->forgotPwd();
}