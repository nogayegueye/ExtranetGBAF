<?php 
    require_once 'configuration.php'; // On inclut la connexion à la base de données
 	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Acceuil</title>
		<?php include("header.php") ?>
		<link rel="stylesheet" type="text/css" href="style.css">
		
		
	</head>
	<body> 
			
			<div align="center"><h1>Le GBAF </h1> </div>
			<h3>
				Le GBAF est le représentant de la profession bancaire et des assureurs sur tous
les axes de la réglementation financière française. Sa mission est de promouvoir
l'activité bancaire à l’échelle nationale. C’est aussi un interlocuteur privilégié des
pouvoirs publics.
			</h3>
		
		<h2>Le Groupement Banque Assurance Français (GBAF) est une fédération
représentant les 6 grands groupes français
		</h2> <br />

                    



                        <table border="1" width="100%" >
  
         

					<?php
                    $reqa = $bdd ->query("select * from acteur WHERE id_acteur !=100 ORDER BY id_acteur");
                  while ($desc = $reqa->fetch()) {
                     
                     ?>
                     
  
                      <tr>
                     
                    <td>
                    	<div align="center">
                     <img src="<?php echo "images/".$desc['logo']; ?>"  style="height: 40px; max-width: 100%; display: block;">
                     </div>
                 	</td>
                    <td> <h3><?php echo $desc['acteur'];?></h3><br><p><?php echo $desc['description'];?></p></td>
                    <td>
                    <div align="center">
                    <button><a href="formation&co.php?idb=<?php echo $desc['id_acteur']; ?>"> Lire la suite</a></button>
                    </div>	
                	</td>
                     
                     
                     
                     </tr>
                                     
             
          				<?php   
                           }
        				?>                    
                       
        	</table>
               
	</body>
	<?php include("footer.php") ?>
</html>
