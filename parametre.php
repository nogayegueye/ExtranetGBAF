<?php session_start();
      require_once  'configuration.php' ; // Sur inclu la connexion à la bdd
 ?>
<html>
   <head>
      <title>parametre de compte</title>
      <meta charset="utf-8">
      <link rel="stylesheet" href="connexion.css">
   </head>
   <body>
      
            <form method="POST" action="parametre_trait.php">
               
                   <h1>Edition de mon profil</h1>
              


               <label>prenom :</label>
               <input type="text" name="nouveau_prenom" placeholder="prenom" value="<?php echo $_SESSION['user'] ?>" /><br /><br />
               
               <label>nom :</label>
               <input type="text" name="nouveau_nom" placeholder="nom" value="<?php echo $_SESSION['usernom'] ?>" /><br /><br />
               
               <label>nom_utilisateur :</label>
               <input type="text" name="nouveau_nom_utilisateur" placeholder="nom_utilisateur" value="<?php echo $_SESSION['utilisateur'] ?>"  /><br /><br />
               
               <label>Mot de passe :</label>
               <input type="password" name="mot_de_passe" placeholder="Mot de passe"/><br /><br />
               
               <button type="submit">Mettre à jour mon profil</button>

            </form>
            <?php if(isset($msg)) { echo $msg; } ?>
         </div>
      </div>
   </body>
</html>
