<?php
include("../Modele/model.class.php");
include("../Modele/App.php");
	class connexion{
	}
	$password="";
	$login="";
	$co="";
	$Erreur="";
	$res="";

	if(isset($_POST["submit"])){
		$login=$_POST["login"];
		$password=$_POST["password"];
	
	$db = App::getDatabase();
	$psdo = $db->query("SELECT * FROM ADMIN where Psd = '$login' ;")->fetch(PDO::FETCH_OBJ);
	$mdpa = $db->query("SELECT * FROM ADMIN where mdp = '$password' ;")->fetch(PDO::FETCH_OBJ);
	$co = $db->query("SELECT * FROM ADMIN where mdp ='$password' and Psd = '$login';")->fetch(PDO::FETCH_OBJ);
	}
	if($mdpa == false && $psdo ==false){
   		$Erreur .="<span>Mot de passe incorrect<span><br>";
 	}
 	if($psdo == false){
 	 	$Erreur .="<span>Vous n'êtes pas autoriser<span><br>";
 	}
 	if($psdo != false && $password!=$mdpa){
 		$Erreur .="<span>Mot de passe incorrect<span><br>";
 	}

 	if($co !=false){
 		$res="Connecté";
 	}
 	
 	require('../Vue/admin.php');

?>