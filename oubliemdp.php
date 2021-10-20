<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Mot de passe oublié</title>
		<link rel="stylesheet" href="connexion.css">
	</head>
	<body>
		<form method="POST" action="oubliemdp_traitement.php">
			<div align="center">
			<h1> Mot de passe oublié</h1>

			
				<label for="nom_utilisateur">Nom utilisateur</label>
				<input type="text" name="nom_utilisateur" id="nom_utilisateur"  placeholder="Nom utilisateur" required> <br>
				
			
			<button type="submit"> Valider </button>
			</div>

			

		</form>
	</body>
</html>