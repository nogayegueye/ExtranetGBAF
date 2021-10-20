<?php 
	session_start()
 ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>test</title>
		<link rel="stylesheet" href="connexion.css">
	</head>
	<body>



		


		 <form method="POST" action="oubliemdp_traitement1.php">
               <div align="center">
                 <h1>Mot de passe oublié</h1>
                 <h3>
					Pour réinitialiser votre mot de passe, repondez à la question sécreté au dessous.
				</h3>
              
                   <fieldset>

               <label>prenom :</label>
               <input type="text" name="prenom" placeholder="Prenom" value="<?php echo $_SESSION['user'] ?>" /><br /><br />
               
               <label>nom :</label>
               <input type="text" name="nouveau_nom" placeholder="nom" value="<?php echo $_SESSION['usernom'] ?>" /><br /><br />
               
               <label>Question :</label>
               <input type="text" name="Question" placeholder="question" value="<?php echo $_SESSION['question'] ?>"  /><br /><br />
               
               <label>Reponse :</label>
               <input type="text" name="Reponse" placeholder="reponse"/><br /><br />
               
               <button type="submit">valider</button>
		</fieldset>
		</div>
            </form>




			

	



	</body>
	</html>