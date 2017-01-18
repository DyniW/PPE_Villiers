<?php
	include("modele/modele_secteur.php");
	class C_Secteur
	{
		private $unModele;
		
		public function __construct ($serveur, $bdd, $user, $mdp)
		{
			$this->unModele = new ModeleSecteur($serveur, $bdd, $user, $mdp);
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
		
		public function nbSecteursParCommune() {
			return $this->unModele->nbSecteursParCommune();
		}
	}
	
	//instanciation du controleur
	$unControleur = new C_Secteur("localhost","edc2009","root","");
	$resultats = $unControleur->nbSecteursParCommune();
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