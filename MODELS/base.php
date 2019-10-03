<?php

include 'start_end.php';


    $dbHost = 'mysql-tpphp_bd.alwaysdata.net';
    $dbUser = 'tpphp';
    $pwd = 'EricZemour';
    $dbName = 'tpphp_db';
    $dbLink = mysqli_connect($dbHost, $dbUser, $pwd)
    or die('Erreur de connexion au serveur : ' . mysqli_connect_error());

    mysqli_select_db($dbLink, $dbName)
    or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));




?>