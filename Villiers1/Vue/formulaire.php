
<?= $Erreur ?></br>
<form action="#" method="POST">
<label for="nom">Nom</label></br>
<input type="text" name="nom"/></br>
<label for="prenom">Prenom</label></br>
<input type="text" name="prenom"/></br>
<label for="password">Password</label></br>
<input type="password" name="pass"/></br>
<label for="passConfirm">Confirmation password</label></br>
<input type="password" name="passConfirm"/></br>
<label for="adresse">Adresse</label></br>
<input type="text" name="adresse"></br>
<label for="Tel">Tel</label></br>
<input type="text" name="Tel"></br>
<label for="mail">Mail</label></br>
<input type="email" name="mail"></br>
<label for="nbEnfant">Nombre Enfant</label></br>
<input type="number" name="nbEnfant"></br>
<label for="rvn" id="rvn">Revenue Imposable</label></br>
<input type="text" name="rvn"></br>
<button type="submit" name="enregistrer" class="enregistrer">Envoyer</button></br> 
<?= $succes ?>
</form>


