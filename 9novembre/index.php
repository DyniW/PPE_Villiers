<html>
	<body>
		<h1> Mon site </h1>
		<br/><br/><br/>
		<a href='index.php?page=1'>Lister les communes</a></br>
		<a href='index.php?page=2'>Lister les secteurs</a></br>
		
		<?php
			if (isset($_GET['page']))
			{
				$page=$_GET['page'];
			}
			else
			{
				$page = 0;
			}
			switch($page)
			{
				case 1 : include("Controleur/C_Commune.php");break;
				case 2 : include("Controleur/C_Secteur.php");break;
			}
		?>
	</body>
</html>