
<?php 
   
   
    session_start(); // Démarrage de la session
    require_once 'configuration.php';

  		$reponse = htmlspecialchars($_POST['reponse']); 
             
        
        // On regarde si l'utilisateur est inscrit dans la table compte
        $check = $bdd->prepare('SELECT * FROM compte WHERE nom_utilisateur = ?');
        $check->execute(array($nom_utilisateur));
        $data = $check->fetch();
        $row = $check->rowCount();
        
        

        // Si > à 0 alors l'utilisateur existe
        if($row > 0)
        {
        		
               $reponse=$_POST['reponse'];  
    
                // Si le mot de passe est le bon
                //if(password_verify($mot_de_passe, $data['mot_de_passe']))
                if($reponse==$data['reponse']) 
                {

                    // On créer la session et on redirige sur acceuil.php
                   // $_SESSION['user'] = $data['prenom'];
                    //$_SESSION['usernom'] = $data['nom'];
                    //$_SESSION['utilisateur'] = $data['nom_utilisateur'];
                    //$_SESSION['id_u'] = $data['id_user'];


                   // header('Location: oubliemdp2.php');
                     }else{ 
                    header('Location: oubliemdp1.php?login_err=mot_de_passe'); die();
                }
  		}else{
        header('Location: oubliemdp2.php'); die();
    } 


?>