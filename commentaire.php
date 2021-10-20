<?php
  require_once  'configuration.php' ; // Sur inclu la connexion à la bdd
  //if(isset($_GET['idb'])) {
 // $idb = $_GET['idb'];
   
  
        $commentaire = htmlspecialchars ( $_POST [ 'commentaires' ]);

      //verifier si l'acteur n'a pas encore commenté
        $requeteCountPost= $bdd->query('select count(*) as nombre from post where id_acteur='.$_POST['idb'].' and id_user='.$_POST['id_user'].'');
        //$countPost = $bdd->query('select count(*) as nombre from post where id_acteur="' . $idb . '"');
 
        foreach ($requeteCountPost as $rowZ){ 

            if ($rowZ['nombre'] >=1 )
            {
                print "deja commenté";
                header('location:formation&co.php?idb='.$_POST['idb']);
                  
            }
            
            else {// On insère dans la base de données
    $req = $bdd->prepare('INSERT INTO post(id_user, id_acteur, post) VALUES(:id_user, :id_acteur, :post)');
  $req->execute(array(
  'id_user' => $_POST['id_user'], 
  'id_acteur' => $_POST['idb'],
  'post' => $_POST['commentaires']));

     header('location:formation&co.php?idb='.$_POST['idb']);
                  } 
                                            }
  // }

 ?>