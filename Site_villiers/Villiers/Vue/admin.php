<?php
require ("header.vue.php");
?>
<form method="post" action="">

    <legend>Connexion Admin</legend>

<?= $Erreur ?>
    <div class="form-group">
      <label class="col-lg-2 control-label">Admin</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="login" placeholder="Admin">
      </div>
    </div><br/><br/><br/>

    <div class="form-group">
      <label class="col-lg-2 control-label">Mot de passe</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" name="password" placeholder="Mot de passe">
      </div>
    </div>

<br/><br/><center><button type="submit" name="submit" class="btn btn-primary">Connexion</button></center>
</form>
<?= $res?>

<?php
require("footer.vue.php");
?>