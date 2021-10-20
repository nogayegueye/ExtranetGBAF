<?php 
    require_once  'configuration.php' ; // Sur inclu la connexion à la bdd

    // Si les variables existantes et qu'elles ne sont pas vides
    if (isset ( $_POST [ 'prenom' ]) && isset( $_POST [ 'nom' ]) && isset ( $_POST [ 'nom_utilisateur' ]) && isset ( $_POST [ 'mot_de_passe' ])&& isset ( $_POST [ 'question' ])&& isset ( $_POST [ 'reponse' ]))
    {
        // Patch XSS
        $nom = htmlspecialchars ( $_POST [ 'nom' ]);
        $prenom = htmlspecialchars ( $_POST [ 'prenom' ]);
        $surnom = htmlspecialchars ( $_POST [ 'nom_utilisateur' ]);
        $mot_de_passe = htmlspecialchars ( $_POST [ 'mot_de_passe' ]);
        $question = htmlspecialchars ( $_POST [ 'question' ]);
        $reponse = htmlspecialchars ( $_POST [ 'reponse' ]);

        // On vérifie si l'utilisateur existe
        $check = $bdd->prepare( 'SELECT nom_utilisateur, mot_de_passe FROM compte WHERE nom_utilisateur = ?' );
        $check->execute( array( $nom_utilisateur ));
        $data = $check->fetch();
        $row = $check->rowCount();


        // Si la demande renvoie un 0 alors l'utilisateur n'existe pas 
        if ( $row == 0 )
        {
            if ( strlen ( $nom ) <= 100 ){ // On vérifie que la longueur du nom <= 100
                if ( strlen ( $prenom ) <= 10 ){ // On vérifie que la longueur du prenom <= 100
                	if ( strlen ( $nom_utilisateur ) <= 100 ){ // On vérifie que la longueur du surnom <= 100
                	    if ( strlen ( $question ) <= 100 ){ // On vérifie que la longueur de la question <= 100
                	    	if ( strlen ( $reponse ) <= 100 ){ // On vérifie que la longueur de la reponse <= 100


                            // On hash le mot de passe avec Bcrypt, via un coût de 12
                            $mot_de_passe_hashed = hash('sha256', $mot_de_passe); 
                            
                            // On insère dans la base de données
                            $req = $bdd->prepare('INSERT INTO compte(nom, prenom, nom_utilisateur, mot_de_passe, question, reponse) VALUES(:nom, :prenom, :nom_utilisateur, :mot_de_passe, :question, :reponse)');
							$req->execute(array(
 								'nom'=> $_POST['nom'],
 								'prenom' => $_POST['prenom'], 
 								'nom_utilisateur' => $_POST['nom_utilisateur'], 
 								'mot_de_passe' => $mot_de_passe_hashed, 
 								'question' => $_POST['question'],
 								'reponse' =>  $_POST['reponse']));
    
                            // On redirige avec le message de succès
                            header ( 'Location:page_connexion.php' );die ();
      
                            } else { header ( 'Location: page_inscription.php?reg_err=reponse_length' ); die ();}
                  		} else { header ( 'Location: page_inscription.php?reg_err=question_length' ); die ();}
                   } else { header ( 'Location: page_inscription.php?reg_err=nom_utilisateur_length' ); die ();}
                } else { header ( 'Location: page_inscription.php?reg_err=prenom_length' ); die ();}
            } else { header ( 'Location : page_inscription.php?reg_err=nom_length' ); die ();}
        } else { header ( 'Location : page_inscription.php' ); die ();}
    } else { header ( 'Location : page_inscription.php?reg_err=already' ); die ();}
    
































?>

<?php 
$pass_hache = password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT);




