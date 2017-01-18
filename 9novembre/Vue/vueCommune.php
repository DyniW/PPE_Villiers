<html>
	<body>
		<h1> Liste des communes </h1>
		<br/><br/>
		<?php
		foreach ($resultats as $unResultat)
		{
			echo "<br/>id Commune : ".$unResultat['idCommune'];
			echo "<br/>Nom Commune : ".$unResultat['nomCommune'];
		}
		?>
	</body>
</html>