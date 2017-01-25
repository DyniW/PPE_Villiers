<?php

class EspaceFam{
}
	
	$Erreur="";
	$succes="";
	$nom="";
	$prenom="";
	$pass="";
	$passConfirm="";
	$adresse="";
	$Tel="";
	$mail="";
	$rvn="";
	$nbEnfant="";
	$lg="";

	if(isset($_POST["enregistrer"])){
		$nom=$_POST["nom"];
		$prenom=$_POST["prenom"];
		$pass=$_POST["pass"];
		$passConfirm=$_POST["passConfirm"];
		$adresse=$_POST["adresse"];
		$Tel=$_POST["Tel"];
		$mail=$_POST["mail"];
		$rvn=$_POST["rvn"];
		$nbEnfant=$_POST["nbEnfant"];

		if($pass != $passConfirm){
			$Erreur .="<span>Les mots de passe ne sont pas identique.<span><br>";
		}
		if($pass >5){
			$Erreur .="<span>Le mot de passe doit faire plus que 5 carractère.<span><br>";
		}
		if(strlen($Tel) !=10){
			$Erreur .="<span>Le numéro de téléphone n'est pas correcte.<span><br>";
		}
		if(empty($nom) || empty($prenom) || empty($rvn) || empty($mail) || empty($Tel)){
			$Erreur .="<span> des champs ne sont pas rempli<span><br>";
		}
		$domaine= strstr($mail, '@');
		if($domaine[0] !='@'){
			$Erreur .="<span>L'addresse email n'est pas bonne<span><br>";
		}
		$db = App::getDatabase();

		$email = $db->query("SELECT * FROM FAMILLE where mail = '$mail' ")->fetch(PDO::FETCH_OBJ);
	 	if($email != false){
 	 		$Erreur .="<span>L'adresse mail exsite déjà<span><br>";
		}
		if(!preg_match('`^[[:alnum:]]+$`',$nom && $prenom))
		{
		$Erreur .= "<span>Caractere non possible<span><br>";
		}
		

		if($Erreur ==""){
		$db=App::getDatabase();
		$db->query("INSERT into FAMILLE(NomChefF, PrenomChefF,Password,AdresseF,TelF,Mail,RevenuImpoL,NbEnfantF) values('$nom','$prenom','$pass','$adresse','$Tel','$mail','$rvn','$nbEnfant');");
		var_dump($db);
		$succes = "<span> L'enregistrement à été effectué</span></br>";}
}


include ('vue/EspaceFam.php');
?>