<form action="traitement.php" method="POST">
	<label for ="pseudo"> Pseudo : </label>
    <input maxlength="20" type ="text" name="pseudo" id="pseudo" required/>
    <br>
    <label for ="password"> Mot de passe : </label>
    <input type ="password" name="password" id="password" required/>
    <br>
    <label for ="confirmPassword"> Confirmer votre mot de passe : </label>
    <input type ="password" name="confirmPassword" id="confirmPassword" required/>
    <br>
    <label for ="mail"> Mail : </label>
    <input type ="mail" name="mail" id="mail" required/>
    <br>
	<input type="submit" name="Validation" value="Envoyer">
</form>