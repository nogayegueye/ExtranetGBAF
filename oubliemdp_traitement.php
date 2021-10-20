<?php 
   
   
    
    require_once 'configuration.php'; // On inclut la connexion à la base de données

   
        // Patch XSS
        $nom_utilisateur = htmlspecialchars($_POST['nom_utilisateur']); 
              
        
        // On regarde si l'utilisateur est inscrit dans la table compte
        $check = $bdd->prepare('SELECT * FROM compte WHERE nom_utilisateur = ?');
        $check->execute(array($nom_utilisateur));
        $data = $check->fetch();
        $row = $check->rowCount();
        
                if($data) //AND $testpass
        {
                    
                     session_start();

                    $_SESSION['user'] = $data['prenom'];
                    $_SESSION['usernom'] = $data['nom'];
                    $_SESSION['utilisateur'] = $data['nom_utilisateur'];
                    $_SESSION['id_u'] = $data['id_user'];
                    $_SESSION['question'] = $data['question'];
                    $_SESSION['reponse'] = $data['reponse'];


                   
                    header('Location: oubliemdp1.php');
        }
        else 
        {   // si erreur d'identifiant ou de mot de passe
            session_start();
            $_SESSION['wrong'] = true ;
            header('Location: oubliemdp1.php');
        }
        

?>







    
			