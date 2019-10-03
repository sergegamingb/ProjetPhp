<?php


include 'base.php';




     function addUser()
    {

        $dbLink=$GLOBALS['dbLink'];
        $action = $_POST['action'];
        $email = $_POST['mail'];
        $password = $_POST['mdp'];
        $identifiant = $_POST['identifiant'];
        $sexe = $_POST['genre'];
        $telephone = $_POST['phone'];
        $pays = $_POST['pays'];
        $conditions = 'member';

        if ($action == 'inscription') {
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
        } else
            echo '<br/><strong>Bouton non géré !</strong><br/>';
        end_page();

}
?>



