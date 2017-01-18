<?php
	include("modele/modele_profil.php");
	class C_Profil
	{
		private $unModele;
		
		public function __construct ($serveur, $bdd, $user, $mdp)
		{
			$this->unModele = new ModeleProfil($serveur, $bdd, $user, $mdp);
			$this->unModele->setTable("secteur");
		}
		
		public function selectAll()
		{
			return $this->unModele->selectAll();
		}
		public function selectWhere ($champs, $where) {
			return $this->unModele->selectWhere($champs, $where);
		}
		
		public function insert($tab){
			$this->unModele->insert($tab);
		}
		
		public function delete ($where) {
			$this->unModele->delete($where);
		}
		
		public function update($tab, $where) {
			$this->unModele->update($tab,$where);
		}
		
		public function verifConnexion($where) {
			return $this->unModele->verifConnexion($where);
		}
	}
	
	//instanciation du controleur
	$unControleur = new C_Profil("localhost","edc2009","root","");
	$where = array("pseudo"=>"admin", "mdp"=>"123");
	
	$resultats = $unControleur->verifConnexion($where);
	var_dump($resultat);
	include("vue/vueNbSecteurs.php");
	
	//$tab = array("nomSecteur"=>"La Courneuve");
	//$unControleur->insert($tab);
	
	//$where = array("idsecteur" => 1);
	//$unControleur->update($tab,$where);
	
	//$resultats = $unControleur->selectAll();
	//$champs = array("idSecteur", "nomSecteur", "espaceVert", "idCommune");
	//$where = array();
	//$resultats = $unControleur->selectWhere($champs, $where);
	
	//include("vue/vueSecteur.php");