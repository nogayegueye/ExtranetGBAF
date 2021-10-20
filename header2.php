
<!-- Header / comporte le logo, le nom prénom de la personne et le bouton de déconnexion -->
<?php  
	session_start(); // Démarrage de la session
	require_once 'configuration.php'; // On inclut la connexion à la base de données

?> 


<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	
	</head>
	<body>
	<header>
		<div id="header">
			
			<img src="images/gbafbis.png" alt="logo_gbaf" width="70px" height="70px"/>
			

			<div align="right">
				<a href="page_d'inscription.php"> s'inscrire</a>
			</div>
		</div>
	</header>		
	</body>
</html>