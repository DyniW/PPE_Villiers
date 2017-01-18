<html>
	<body>
		<h1> Liste des secteurs </h1>
		<br/><br/>
		<?php
		foreach ($resultats as $unResultat)
		{
			echo "<br/>id Secteur : ".$unResultat['idsecteur'];
			echo "<br/>Nom Secteur : ".$unResultat['nomSecteur'];
			if($unResultat['espaceVert']==1)
			{
				echo "<br/>Ce secteur a un espace vert";
			}
			else {
				echo "<br/>Ce secteur n'a pas un espace vert";
			}
			echo "<br/>Ce secteur est rattaché à la commune ".$unResultat['idCommune']."<br>";
		}
		?>
	</body>
</html>