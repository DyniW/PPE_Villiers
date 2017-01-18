<?php
	include("modele/modele.php");
	class C_Commune
	{
		private $unModele;
		
		public function __construct ($serveur, $bdd, $user, $mdp)
		{
			$this->unModele = new Modele($serveur, $bdd, $user, $mdp);
			$this->unModele->setTable("commune");
		}
		
		public function selectAll()
		{
			return $this->unModele->selectAll();
		}
		
	}
	
	//instanciation du controleur
	$unControleur = new C_Commune("localhost","edc2009","root","");
	
	$resultats = $unControleur->selectAll();
	
	include("vue/vueCommune.php");
	
?>