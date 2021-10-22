
<?php 
   
   
    session_start(); // Démarrage de la session
    require_once 'configuration.php'; // On inclut la connexion à la base de données

   
        // Patch XSS
        $nom_utilisateur = htmlspecialchars($_POST['nom_utilisateur']); 
        $mot_de_passe = htmlspecialchars($_POST['mot_de_passe']);
       
        
        // On regarde si l'utilisateur est inscrit dans la table compte
        $check = $bdd->prepare('SELECT * FROM compte WHERE nom_utilisateur = ?');
        $check->execute(array($nom_utilisateur));
        $data = $check->fetch();
        $row = $check->rowCount();
        
        

        // Si > à 0 alors l'utilisateur existe
        if($row > 0)
        {
        		
               $mot_de_passe_hashed = hash('sha256', $mot_de_passe);  
    
                // Si le mot de passe est le bon
                //if(password_verify($mot_de_passe, $data['mot_de_passe']))
                if($mot_de_passe_hashed==$data['mot_de_passe']) 
                {


                    // On créer la session et on redirige sur acceuil.php
                    $_SESSION['user'] = $data['prenom'];
                    $_SESSION['usernom'] = $data['nom'];
                    $_SESSION['utilisateur'] = $data['nom_utilisateur'];
                    $_SESSION['id_u'] = $data['id_user'];

                    header('Location: acceul.php');
                
                }else{ 
                    header('Location: index.php?login_err=mot_de_passe'); die();
                }
  	
   	}else{
        header('Location: index.php'); die();
    } // si le formulaire est envoyé sans aucune données²

?>