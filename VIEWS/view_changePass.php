<?php $title ='Changement de mot de passe';

 ob_start();
 session_start();
?>



    <form action="../CONTROLLERS/controller_user.php" method="post">
        <input type="password" placeholder="ancien mot de passe" name="oldMdp" /> <br>
        <input type="password" placeholder="nouveau mot de passe" name="newMdp"/> <br>
        <input type="password" placeholder="confirmer mot de passe" name="confirmMdp"/> <br>
        <input type="submit" name="action" value="modifier"/> <br>

    </form>


<?php $content = ob_get_clean(); ?>

<?php require('view_template.php'); ?>






/*e

















