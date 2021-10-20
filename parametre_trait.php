<?php
session_start();
 require_once  'configuration.php' ; // Sur inclu la connexion à la bdd
 
if(isset($_SESSION['id_u'])) {
   $requser = $bdd->prepare("SELECT * FROM compte WHERE id_user = ?");
   $requser->execute(array($_SESSION['id_u']));
   $user = $requser->fetch();


   if(isset($_POST['nouveau_prenom']) AND !empty($_POST['nouveau_prenom']) AND $_POST['nouveau_prenom'] != $user['prenom']) {
      $nouveau_prenom = htmlspecialchars($_POST['nouveau_prenom']);
      $insertprenom = $bdd->prepare("UPDATE compte SET prenom = ? WHERE id_user = ?");
      $insertprenom->execute(array($nouveau_prenom, $_SESSION['id_u']));
      header('Location: deconnexion.php');
   }


   if(isset($_POST['nouveau_nom']) AND !empty($_POST['nouveau_nom']) AND $_POST['nouveau_nom'] != $user['nom']) {
      $nouveau_nom = htmlspecialchars($_POST['nouveau_nom']);
      $insertnom = $bdd->prepare("UPDATE compte SET nom = ? WHERE id_user = ?");
      $insertnom->execute(array($nouveau_nom, $_SESSION['id_u']));
    header('Location: deconnexion.php');
   }



   if(isset($_POST['nouveau_nom_utilisateur']) AND !empty($_POST['nouveau_nom_utilisateur']) AND $_POST['nouveau_nom_utilisateur'] != $user['nom_utilisateur']) {
      $nouveau_nom_utilisateur = htmlspecialchars($_POST['nouveau_nom_utilisateur']);
      $insertnom_utilisateur = $bdd->prepare("UPDATE compte SET nom_utilisateur = ? WHERE id_user = ?");
      $insertnom_utilisateur->execute(array($nouveau_nom_utilisateur, $_SESSION['id_u']));
      header('Location: deconnexion.php');;
   }



   if(isset($_POST['mot_de_passe']) AND !empty($_POST['mot_de_passe'])) {
      $mot_de_passe =  hash('sha256', $_POST['mot_de_passe']);
      if(isset ( $_POST['mot_de_passe'])) {
      $insertmdp = $bdd->prepare("UPDATE compte SET mot_de_passe = ? WHERE id_user = ?");
      $insertmdp->execute(array($mot_de_passe, $_SESSION['id_u']));
         header('Location: deconnexion.php');
   } 


   }
   else {
   header("Location: acceul.php");
}
}
?>
