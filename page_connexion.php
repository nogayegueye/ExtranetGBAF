
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="connexion.css">
		<title>Connexion</title>
		
	</head>
	<body>
		<form action="trait_connect.php" method="POST">
			<h1> Se connecter </h1>
				<fieldset>
					<p>
						
						<label for="nom_utilisateur"> Entrez votre nom d'utilistaeur</label>
						<input type="text" name="nom_utilisateur" id="nom_utilisateur"  required placeholder="Nom d'utilisateur" />
						
					</p>

					<p>
						
						<label for="mot_de_passe"> Entrez votre mot de passe</label>
						<input type="password" name="mot_de_passe" id="mot_de_passe" required placeholder="Mot de passe" />
						
					</p>
				<div align="center">
					<a href="oubliemdp.php"> Mot de passe oublié?</a>
				
				</div>
				<br>


				<div align="center">
					<button type="submit"> connexion </button>
				</div>								
				
				
				
				</fieldset>	
		</form>
			
	</body>
	

</html>