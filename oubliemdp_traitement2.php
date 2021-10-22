<?php 
   
   
    session_start(); // Démarrage de la session
    require_once 'configuration.php';
if(isset($_SESSION['id_u'])) {
   $requser = $bdd->prepare("SELECT * FROM compte WHERE id_user = ?");
   $requser->execute(array($_SESSION['id_u']));
   $user = $requser->fetch();

 if(isset($_POST['mot_de_passe']) AND !empty($_POST['mot_de_passe'])) {
      $mot_de_passe =  hash('sha256', $_POST['mot_de_passe']);
      if(isset ( $_POST['mot_de_passe'])) {
      $insertmdp = $bdd->prepare("UPDATE compte SET mot_de_passe = ? WHERE id_user = ?");
      $insertmdp->execute(array($mot_de_passe, $_SESSION['id_u']));}

      header('Location: index.php');
       
}
 else {
   header("Location: page_inscripton.php");
}
}
?>
