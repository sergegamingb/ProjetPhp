<?php $title ='Changement de mot de passe';

ob_start();
session_start();
?>









<?php $content = ob_get_clean(); ?>

<?php require('view_template.php'); ?>
