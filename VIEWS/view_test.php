<?php

session_start();

if($_SESSION['login']!='ok')
{
    die('Erreurd\'authentification');
}
else
{
    echo '<br/> <h1> test </h1>';
}

?>