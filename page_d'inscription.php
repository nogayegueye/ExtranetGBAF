<?php  
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="connexion.css">
		<title>Page d'inscription</title>
	</head>
	<body>
		   
		<form action="page_recuperation.php" method="POST">
			<fieldset>
				<h1> Page d'inscription</h1>
				<p>
					
					<input type="text" name="nom" id="nom" autofocus required placeholder="Nom" />
				</p>

				<p>
					
					<input type="text" name="prenom" id="prenom" required  placeholder="Prenom" />
				</p>

				<p>
					
					<input type="text" name="nom_utilisateur" id="nom_utilisateur" required  placeholder="Nom d'utilisateur" />
				</p>

				<p>
					
					<input type="password" name="mot_de_passe" id="mot_de_passe" required  placeholder="Mot de passe" />
				</p>
				<p>
					
					<input type="text" name="question" id="question" required  placeholder="Question" />
				</p>

				<p>
					
					<input type="text" name="reponse" id="reponse" required placeholder="Reponse" />
				</p>
				
				<div align="center">
				<button type="submit"> s'inscrire </button>
				</div>

			</fieldset> 	
		</form>
	</body>
</html>