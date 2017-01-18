<?php
	class Modele
	{
		protected $pdo;
		private $table;
		
		public function __construct($serveur, $bdd, $user, $mdp)
		{
			try{
				$this->pdo = new PDO("mysql:host=".$serveur.";dbname=".$bdd, $user, $mdp);
			}
			catch (Exception $exp)
			{
				echo "Erreur de la connexionau serveur";
			}
		}
		
		public function setTable ($uneTable)
		{
			$this->table = $uneTable;
		}
		
		public function selectAll()
		{
			$requete = "select * from ".$this->table." ;";
			$select = $this->pdo->prepare($requete);
			$select->execute();
			$resultats = $select->fetchAll();
			return $resultats;
			
		}
		
		public function selectWhere($champs,$where) {
			$listeChamps = implode (",", $champs);
			$donnees = array();
			$clause = array();
			foreach($where as $cle=>$valeur) {
				$clause [] = $cle."=:".$cle;
				$donnees[":".$cle] = $valeur;
			}
			$listeClauses = implode (" and ", $clause);
			$requete = "select ".$listeChamps." from ".$this->table." where ".$listeClauses.";";
			
			$select = $this->pdo->prepare($requete);
			$select->execute($donnees);
			$resultats = $select->fetchAll();
			return $resultats;
		}
		
		public function insert ($tab)
		{
			$champs = array();
			$donnees = array();
			$valeurs = array();
			
			foreach($tab as $cle=>$valeur)
			{
				$champs[]=$cle;
				$valeurs[] = ":".$cle;
				$donnees[":".$cle] = $valeur;
			}
			
			$listeChamps = implode(",", $champs);
			$listeDonnees = implode(",", $valeurs);
			
			$requete = "insert into ".$this->table." (".$listeChamps.") values (".$listeDonnees.")";
			$insert = $this->pdo->prepare($requete);
			$insert->execute($donnees);
		}
		
		public function delete ($where) {
			$clause = array();
			$donnees = array();
			foreach($where as $cle=>$valeur) {
				$clause[] = $cle."=:".$cle;
				$donnees[":".$cle] = $valeur;
			}
			
			$listeClauses = implode(" and ", $clause);
			$requete = "delete from ".$this->table." where ".$listeClauses.";";
			$delete = $this->pdo->prepare($requete);
			$delete->execute($donnees);
		}
		
		public function update ($tab,$where) {
			$clause = array();
			$donnees = array();
			$valeurs = array();
			
			foreach($where as $cle=>$valeur) {
				$clause[] = $cle."=:".$cle;
				$donnees[":".$cle] = $valeur;
			}
			
			foreach($tab as $cle=>$valeur) {
				$valeurs[] = $cle."=:".$cle;
				$donnees[":".$cle] = $valeur;
			}
			
			$listeDonnees = implode (",", $valeurs);
			$listeClauses = implode (" and ", $clause);
			$requete = "update ".$this->table." set ".$listeDonnees." where ".$listeClauses;
			$update = $this->pdo->prepare($requete);
			$update->execute($donnees);
		}
	}
?>