<?php 
	session_start()
 ?>


 <!DOCTYPE html>
 <html>
 	<head>
 		<meta charset="utf-8">
 		<title>Mot de passe oublié</title>
 		<link rel="stylesheet" href="connexion.css">
 	</head>
 	<body>
 	
 		<form method="POST" action="oubliemdp_traitement2.php">
 		<div align="center">
 		<p>Veuillez entrer votre nouveau mot de passe : <br></p>

 		
 	
			<p>
				<label for="mot_de_passe"> Mot de passe</label>
				<input type="password" name="mot_de_passe" id="mot_de_passe" maxlength="255" placeholder="Votre mot de passe" required> <br>
				
			</p>

			<p>
				<button type="submit"> envoyer</button>
			</p>
		</div>
		</form>

 	</body>
 </html>