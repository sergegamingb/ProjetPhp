<?php

session_start();

$_SESSION['isLogin']='no';
header('Location: ../VIEWS/accueil.php');
//