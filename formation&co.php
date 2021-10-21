 <?php

    require_once 'configuration.php'; // On inclut la connexion à la base de données

//on compt le nombre de like et de dislike dans la table post
 if(isset($_GET['idb'])) {
     $idb = $_GET['idb'];

  	$comments = $bdd->query('SELECT c.prenom, c.nom, p.post,p.date_add FROM post p JOIN compte c ON p.id_user=c.id_user where id_acteur="' . $idb . '" order by date_add desc');

    // $comments = $bdd->query('SELECT * FROM post where id_acteur="' . $idb . '" order by date_add desc')->fetch();

  	$informationActeur = $bdd->query('select * from acteur where id_acteur="' . $idb . '"')->fetch();

     $countPost = $bdd->query('select count(*) as nombre from post where id_acteur="' . $idb . '"');

     //on compt le nombre de like et de dislike dans la table vote
     $countlike = $bdd->query('select count(*) as nombre from vote where vote=1 and id_acteur="' . $idb . '"');

     $countdislike = $bdd->query('select count(*) as nombre from vote where vote=0 and id_acteur="' . $idb . '" ');

     

// var_dump($desc->fetch());
 }
 ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Page acteurs</title>
		<link rel="stylesheet" href="acteur.css">
		<?php include("header.php") ?>
	</head>
	<body>
		<div class="images" align="center">
			<img src="<?php echo "images/".$informationActeur['logo']; ?>" alt=logoacteur  style="height: 100px; width: 50%; display: block;">
		</div>	
		<div></div>
		<h2>
			<strong>Bienvenue  sur <?php echo $informationActeur['acteur'];?></strong>
		</h2>
		<p style="color:black;">

			<?php echo $informationActeur['description'];?>

		</p>

		
			

	
		<h2> Commentaire: </h2>
		
		<form action="like.php" method="post">	
		<fieldset>
						
					<input type="hidden" name="idb" value="<?php echo $idb;  ?>">
					<input type="hidden" name="like" value="1">
					<input type="hidden" name="id_user" value="<?php if(isset($_SESSION['id_u'])){ echo $_SESSION['id_u'] ;}	 ?>">

					
				<div align="right">
					<button type="submit"><img src="images/likebis.png" title="like" width="30px" height="30px" /> </button>
				<?php foreach ($countlike as $row1) {?>
				<?php  print $row1["nombre"]  ;?> 
				<?php }?>

				</div>	

		</fieldset>		
				
				
		</form>	  
		<form action="dislike.php" method="post">		
				<fieldset>		
					<input type="hidden" name="idb" value="<?php echo $idb;  ?>">
					<input type="hidden" name="dislike" value="0">
					<input type="hidden" name="id_user" value="<?php if(isset($_SESSION['id_u'])){ echo $_SESSION['id_u'] ;}	 ?>">

					
				<div align="right">
					<button type="submit"><img src="images/dislikebis.png" title="dislike" width="30px" height="30px" />  </button>
				<?php foreach ($countdislike as $row1) {?>
				<?php  print $row1["nombre"]  ;?> 
				<?php }?>

				</div>	

				</fieldset>
				
				
		</form>

			

		<form action="commentaire.php" method="post">
			
				<fieldset>
					<input type="hidden" name="idb" value="<?php echo $idb;  ?>">
					<input type="hidden" name="id_user" value="<?php if(isset($_SESSION['id_u'])){ echo $_SESSION['id_u'] ;}	 ?>">
				<?php foreach ($countPost as $row1) {?>
					<?php  print $row1["nombre"]  ;?>  Message:
					<?php }?>
					<div>
						<label for="commentaires">Message</label> 
						<textarea type="text" name="commentaires" id="commentaires" required></textarea>
					</div>

					
				<div>
					<button type="submit"> Envoyer </button>
				</div>	
				</fieldset>	
				<?php // on affiche le nombre de commentaire dans la table post ?>

							
		</form>	





	
</br>



<table border="1" width="100%">
	
<tr>
	<?php foreach ($comments as $rowc) { ?>

	<td><?php  print $rowc["prenom"]  ;?><br><?php  print $rowc["date_add"];  ?><br><?php  print $rowc["post"] ; ?> </td>
	
</tr>

	<?php } ?>

</table>

	</body>
	<?php include("footer.php") ?>
</html>








