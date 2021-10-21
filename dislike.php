<?php
require_once 'configuration.php'; // Sur inclu la connexion à la bdd


//  verifier si l'acteur n'a pas encore commenté
$requeteCountlike = $bdd->query('select count(*) as nombre from vote where id_acteur=' . $_POST['idb'] . ' and id_user=' . $_POST['id_user'] . ' ');

foreach ($requeteCountlike as $rowZ) {
    if ($rowZ['nombre'] >= 1) {

     //   if ($_POST['dislike'] = 0) {
            $reqlike = $bdd->prepare('UPDATE vote SET vote = 0 WHERE id_acteur='.$_POST['idb'].' and id_user='.$_POST['id_user'].'');
              $reqlike->execute();

                header('location:formation&co.php?idb=' . $_POST['idb']);
      //     }

    } else {// On insère dans la base de données

        $req = $bdd->prepare('INSERT INTO vote(id_user, id_acteur,vote) VALUES(:id_user, :id_acteur, :dislike)');
        $req->execute(array(
            'id_user' => $_POST['id_user'],
            'dislike' => $_POST['dislike'],
            'id_acteur' => $_POST['idb']));

        header('location:formation&co.php?idb=' . $_POST['idb']);
    }
}
?>