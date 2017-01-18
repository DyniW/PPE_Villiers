<?php
	class Modele
	{
		private $pdo;
		private $table;
		public function __construct( $bdd, $user, $mdp, $serveur ='localhost')
		{
			$this->pdo = new PDO("mysql:dbname=$bdd;host=$serveur",$user,$mdp);
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
		}

		public function query($query, $params = false){
			if($params){
				$req = $this->pdo->prepare($query);
				$req->execute($params);
			}else{
				$req = $this->pdo->query($query);
			}
			return $req;
		}




		
}
	
?>



			

		
				
