<?php
	require_once  'configuration.php' ; // Sur inclu la connexion à la bdd

    // Si les variables existantes et qu'elles ne sont pas vides
   // if (isset ( $_POST [ 'nom_utilisateur' ])&& isset ( $_POST [ 'commentaire' ]))  
    //}
		

      
      //  verifier si l'acteur n'a pas encore commenté
        $requeteCountlike= $bdd->query('select count(*) as nombre from vote where id_acteur='.$_POST['idb'].' and id_user='.$_POST['id_user'].' ');

        foreach ($requeteCountlike as $rowZ){
            if ($rowZ['nombre'] >=1 )
            {
                print "deja voté";
                 header('location:formation&co.php?idb='.$_POST['idb']);
           }
            
          else {// On insère dans la base de données

    $req = $bdd->prepare('INSERT INTO vote(id_user, id_acteur,vote) VALUES(:id_user, :id_acteur, :islike)');
	$req->execute(array(
  'id_user' => $_POST['id_user'], 
  'islike' => $_POST['islike'], 
  'id_acteur' => $_POST['idb']));

   header('location:formation&co.php?idb='.$_POST['idb']);
                 
              }
                                            }   

$requeteCountlike= $bdd->query('delete count(*) as nombre from vote where id_acteur='.$_POST['idb'].' and id_user='.$_POST['id_user'].' ');

       foreach ($requeteCountlike as $rowZ){
        if ($rowZ['nombre'] >=1 )
           {
               print "deja voté";
            include 'formation&co.php';
            }

	}else{ 

    
 ?>