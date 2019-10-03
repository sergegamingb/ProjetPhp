<?php
include 'Start_end.php';
start_page('login');
?>

    <form action="test-pass.php" method="post">

        <label for="email">E-mail :</label><input id="Email" type="text" name="Email"><br/>

        <label for="Password"Mot de passe :</label><input id="Password" type="password" name="Password"><br/>

        <input id="action" type="submit" name="action" value="Connexion"><br/>

    </form>

<?php
end_page();
?>