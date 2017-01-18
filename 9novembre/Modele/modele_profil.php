<?php
	require 'modele/modele.php';	
	class ModeleProfil extends Modele
	{
		public function __construct($serveur, $bdd, $user, $mdp) {
			//constructeur de la classe more
			parent::__construct($serveur, $bdd, $user, $mdp);
		}
		
		public function verifConnexion($tab) {
			$clause = array();
			$donnees= array();
			foreach ($where as $cle=>$valeur)
			{
				$clause[]=$cle."=:".$cle;
				$donnees[":".$cle] = $valeur;
			}
			
			$listeClauses = implode (" and ",$clause);
			$requete = "select * from ".$this->table." where ".$listeClauses.";";
			$select = $this->pdo->prepare($requete);
			$select->execute($donnees);
			$resultat = $select->fetch();
			return $resultat;
		}
	}
?>