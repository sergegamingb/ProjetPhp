<?php

include 'MODELS/models_user.php';

$action = $_POST['action'];

if(action =='inscription')
{
    addUser();
}