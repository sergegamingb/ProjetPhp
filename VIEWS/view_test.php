<?php


if($_SESSION['isLogin']!='ok')
{
    die('Erreur d\'authentification');
}
else
{
    echo '<br/> <h1> test </h1>';
}

?>