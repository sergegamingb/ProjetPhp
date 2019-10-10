<?php



//    $dbHost = 'mysql-tpphp.alwaysdata.net';
//    $dbUser = 'tpphp';
//    $pwd = 'ericzemour';
//
//
//    $dbName = 'tpphp_bd';
//    $dbLink = mysqli_connect($dbHost, $dbUser, $pwd)
//    or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
//
//    mysqli_select_db($dbLink, $dbName)
//    or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));


    $db = new PDO('mysql:host=mysql-tpphp.alwaysdata.net;dbname=tpphp_bd', 'tpphp', 'ericzemour');
?>


