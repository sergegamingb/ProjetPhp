<?php


include 'base.php';

class User
{
    private $dbLink;
    private $action;
    private $email;
    private $password;
    private $identifiant;
    private $sexe;
    private $telephone;
    private $pays;
    private $conditions;

    public function __construct()
    {


        $query = 'INSERT INTO USER (mail, pseudo, password, phone, country, user_date, gender, state) 
        VALUES ( \'' . $email . '\' ,
         \'' . $identifiant . '\',
         \'' . $password . '\' ,
         \'' . $telephone . '\' ,
         \'' . $pays . '\' ,
         NOW(),
         \'' . $sexe . '\' ,
         \'' . $conditions . '\'
         )';


        if (!($dbResult = mysqli_query($dbLink, $query))) {
            echo 'Erreur dans requête<br />';
// Affiche le type d'erreur.
            echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
// Affiche la requête envoyée.
            echo 'Requête : ' . $query . '<br/>';
            exit();
        } else {
            echo '<br/><strong>bonsoir, votre inscription a bien été enregistrée.</strong><br/>';
            echo '<br/><strong>Mail envoyé !</strong><br/>';
        }
    }

}




?>



