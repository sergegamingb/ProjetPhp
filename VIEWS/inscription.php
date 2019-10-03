

    <form action="../MODELS/dataprocessing.php" method="post">
        <label for="identifiant">Identifiant :</label> <br/> <input id="Identifiant" type="text" name="Identifiant"><br/>

        <label for="Civ1">Homme :</label> <br/> <input id="Civ1" type="radio" name="Civ" value="Homme"><br/>

        <label for="Civ2">Femme :</label> <br/> <input id="Civ2" type="radio" name="Civ" value="Femme"><br/>

        <label for="email">E-mail :</label> <br/> <input id="Email" type="text" name="Email"><br/>

        <label for="mdp">Veuillez saisir votre mot de passe :</label> <br/> <input id="Password" type="password" name="Password"><br/>

        <label for="vmdp">Veuillez confirmer votre mot de passe :</label> <br/> <input id="vPassword" type="password" name="vPassword"><br/>

        <label for="tel">Téléphone :</label>  <br/> <input id="Phone" type="tel" name="Phone"><br/>

        <select id="Country" name="Country">
            <option value="">Choisir un pays</option>
            <option value="France">France</option>
            <option value="Angleterre">Angleterre</option>
            <option value="Allemagne">Allemagne</option>
        </select><br/>
        <label for="CGU">Acceptez les CGU</label><input id="CGU" type="checkbox" name="CGU"><br/>

        <input id="action" type="submit" name="action" value="Inscription"><br/>


    </form>

