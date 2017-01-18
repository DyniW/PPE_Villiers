<?php
  include ("Modele/model.class.php");
  include("Modele/App.php");
  require 'header.php';
?>
<div class="container-fluid text-center">

    <div class="col-sm-8 text-left">
      <h1>Accueil</h1>

      <p>Website Mairie de Villiers</p>
    </div>

  </div>
</div>
<?php
  require 'footer.php';
?>
<?php/*
  if(isset($_GET["p"])){
     $page = $_GET["p"];
  }else{
    $page = 'home';
  }

  if($page === 'home' ){

    require '';
  }elseif($page === 'formulaire'){
      require 'Controleur/c_formulaire.php';
  }
*/?>

