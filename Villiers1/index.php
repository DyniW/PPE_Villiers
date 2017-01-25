<?php
  
  require 'header.php';
?>
<div class="conteneur">
<?php

if(isset($_GET['p'])) {
  $page = $_GET['p'];


} else{ 
  $page = 'home';
}


if($page === 'home'){
      
   require 'vue/Home.php' ;

}elseif ($page === 'presentation') {
  require 'controleur/c_presentation.class.php' ;

}elseif ($page === 'prestations') {
 
  require '';

}elseif ($page === 'espaceFam') {
    require 'controleur/c_espaceFam.class.php';
  }

?>

</div>

<?php
require 'footer.php';
?>