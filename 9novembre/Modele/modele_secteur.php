<?php
	require 'modele/modele.php';	
	class ModeleSecteur extends Modele
	{
		public function __construct($serveur, $bdd, $user, $mdp) {
			//constructeur de la classe more
			parent::__construct($serveur, $bdd, $user, $mdp);
		}
		
		public function nbSecteursParCommune ()
		{
			//retourne idcommune nomcommune nbsecteurs
			$requete = "select c.idCommune,c.nomCommune,count(s.idSecteur) 
			as nbSecteurs from commune c, secteur s 
			where c.idCommune = s.idCommune
			group by c.idCommune, c.nomCommune";
			$select = $this->pdo->prepare ($requete);
			$select->execute();
			$resultats = $select->fetchAll();
			return $resultats;
		}
	}
?>