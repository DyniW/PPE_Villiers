<?php

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
	$email = $db->query("SELECT * FROM ADULTE where mail = '$login' ;")->fetch(PDO::FETCH_OBJ);
	$mdp = $db->query("SELECT * FROM ADULTE where Password = '$password' ;")->fetch(PDO::FETCH_OBJ);
	$co = $db->query("SELECT * FROM ADULTE where Password ='$password' and mail = '$login';")->fetch(PDO::FETCH_OBJ);

 	if($email == false){
 	 	$Erreur .="<span>Adresse Mail incorrect<span><br>";
 	}
 	if($password!=$mdp || $mdp == false){
 		$Erreur .="<span>Mot de passe incorrect<span><br>";
 	}

 	if($co !=false){
 		$res="<span>Connecté<span><br>";
 	}
 	}
 	require('Vue/connexion.php');
?>