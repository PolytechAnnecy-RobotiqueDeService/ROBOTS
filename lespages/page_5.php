<!DOCTYPE html>
<html>
	<head>
		<h1 class='titre'>Les Robots</h1>
		<link rel="stylesheet" href="lespages/page_5.css">
	</head>

	<body>
		<p>Nous avons avons 2 robot a notre disposition :</p>
		<div class="robot">
			<div class = "divPepper">
				<img class="imgPepper" src="documents/images/Pepper_transparent_background.png" alt="Pepper" /><br/> 
				<span>Pepper</span>
				<div class="spoilerPepper">
					<!--bouton plus d'info -->
					<input type="button" class="boutonSpoiler" value="Plus d'info" onclick="ouvrirFermerSpoiler(this);" />
					<div class="contenuSpoiler"><!--texte cacher -->
					  <p>Pepper est dit être un robot émotionnel, car l'objectif est qu'il puisse avoir la réaction la plus appropriée pour une situation non définie.</p>

					  <p>Le robot possède ainsi une variété de tons et de registres de langue qu'il va sélectionner en fonction de l'analyse du contexte et de son interlocuteur. La reconnaissance des émotions de l'interlocuteur est basée sur la détection des expressions faciales, du ton et du champ lexical employé.</p>

					  <p>Outre l'interaction verbale, le robot va adapter sa position et respecter une certaine distance avec la personne, afin qu'elle ne soit pas mal à l'aise, mais que la relation puisse tout de même se construire. De la même façon, Pepper va adopter un langage corporel particulier. Tout cela dans le but que sa réaction soit la plus pertinente et la plus appréciée par l'interlocuteur.</p>

					</div><br/> 
				   
				   
				</div>
			</div>
			
			<div class = "divNao">
				<img class="imgNao" src="documents/images/Nao_transparent_background.png" alt="Nao"  /><br/> 
				<span>Nao</span>
				<div class="spoilerNao">
					<!--bouton plus d'info -->
					<input type="button" class="boutonSpoiler" value="Plus d'info" onclick="ouvrirFermerSpoiler(this);" />
					<div class="contenuSpoiler"><!--texte cacher -->
						<p>NAO est un robot humanoïde français, autonome et programmable, initialement développé par la société Aldebaran Robotics, une start-up française située à Paris, rachetée par le groupe japonais SoftBank Groupe en 2015 qui la renomme en SoftBank Robotics.</p>

					  <p>Le 15 août 2007, Nao remplace le chien robot Aibo de Sony en tant que robot utilisé dans la RoboCup Standard Platform League (SPL), une compétition internationale de robots joueurs de football. Nao a été utilisé dans la RoboCup 2008 et 2009, et le NaoV3R a été choisi comme plate-forme pour le SPL à la RoboCup 2010.</p>

					  <p>Plusieurs versions du robot ont été déployées depuis 2008. Le Nao Academics Edition a été développé pour les universités et les laboratoires à des fins de recherche et d'éducation. Il a été mis à la disposition des institutions en 2008 et du grand public en 2011. Diverses mises à jour de la plate-forme Nao ont été publiées depuis, notamment la Nao Next Gen 2011 et la Nao Evolution 2014.</p>

					  <p>Les robots Nao ont été utilisés à des fins de recherche et d'éducation dans de nombreuses institutions académiques du monde entier. En 2015, plus de 5 000 unités Nao sont utilisées dans plus de 50 pays.</p>
					</div><br/> 
				   

				</div>
			</div>

		</div>

		</br>
		
		<h3 class="t">Liste modulable des different capteur des robots</h3>

		<form>
			<div class="form1">
				<?php
				$sql = "SELECT DISTINCT(categorie) FROM `ROBOTS_capteur`";
				$result = mysqli_query($conn, $sql) or die("Requête invalide: ". mysqli_error()."\n".$sql);
				?>
				<label>Catégorie :</label><br/>
				<select name="Actionneur" size="1">
					<option>Tout</option>
					<?php 
						while ($row = mysqli_fetch_assoc($result)){
							echo "<option>".$row["categorie"]."</option>";
						}
					?>
				</select>
			</div>
			
			<div class="form1">
				<?php
				$sql = "SELECT DISTINCT(type) FROM `ROBOTS_capteur`";
				$result = mysqli_query($conn, $sql) or die("Requête invalide: ". mysqli_error()."\n".$sql);
				?>
				<label>Type :</label><br/>
				<select name="Type" size="1">
					<option>Tout</option>
					<?php 
						while ($row = mysqli_fetch_assoc($result)){
							echo "<option>".$row["type"]."</option>";
						}
					?>
				</select>
			</div>
			   
			
			<div class="form1">
				<?php
				$sql = "SELECT DISTINCT(robot) FROM `ROBOTS_capteur`";
				$result = mysqli_query($conn, $sql) or die("Requête invalide: ". mysqli_error()."\n".$sql);
				?>
				<label>Robot :</label><br/>
				<select name="robot" size="1">
					<option>Tout</option>
					<?php 
						while ($row = mysqli_fetch_assoc($result)){
							echo "<option>".$row["robot"]."</option>";
						}
					?>
			   </select>
			</div>
			   
	
			<div class="form1">
				<?php
				$sql = "SELECT DISTINCT(lieux) FROM `ROBOTS_capteur`";
				$result = mysqli_query($conn, $sql) or die("Requête invalide: ". mysqli_error()."\n".$sql);
				?>
				<label>Membre :</label><br/>
				<select name="lieux" size="1">
					<option>Tout</option>
					<?php 
						while ($row = mysqli_fetch_assoc($result)){
							echo "<option>".$row["lieux"]."</option>";
						}
					?>
			   </select>
			</div>
			   
			   
			<input type="hidden" name="page" value="5">
			<button type="submit" > Envoyer </button>
		</form>



		<?php
		if (isset($_GET["Actionneur"])){
		   $Actionneur = $_GET["Actionneur"];
		   $Type = $_GET["Type"];
		   $robot = $_GET["robot"];
		   $lieux = $_GET["lieux"];
		   
		   if ($Actionneur == "Tout"){
			   $Actionneur = 'categorie';
		   }else{
			   $Actionneur = '"'.$Actionneur.'"';
		   }
		   
		   if ($Type == "Tout"){
			   $Type = 'type';
		   }else{
			   $Type = '"'.$Type.'"';
		   }
		   if ($robot == "Tout"){
			   $robot = 'robot';
		   }else{
			   $robot = '"'.$robot.'"';
		   }
		   if ($lieux == "Tout"){
			   $lieux = 'lieux';
		   }else{
			   $lieux = '"'.$lieux.'"';
		   }
		   
		   
		   $sql = "SELECT * FROM `ROBOTS_capteur` WHERE  categorie = ".(string)$Actionneur." and type = ".(string)$Type." and robot = ".(string)$robot." and lieux = ".(string)$lieux;
		   //echo $sql;
		   $result = mysqli_query($conn, $sql) or die("Requête invalide: ". mysqli_error()."\n".$sql);
		?>
		
		<table>
			<thead>
				<tr>
					<th colspan="5">Les capteurs</th>
				</tr>
				<tr>
				   <th>Nom</th>
				   <th>Categorie</th>
				   <th>Type</th>
				   <th>Robot</th>
				   <th>Lieux</th>
				</tr>
			</thead>
			<tbody>
				
				 <?php
				 while ($row = mysqli_fetch_assoc($result)) { //on extrait les capteurs ?>  
					<tr><td><?php echo $row["titre"] ?></td>
					<td><?php echo $row["categorie"] ?></td>
					<td><?php echo $row["type"] ?></td>
					<td><?php echo $row["robot"] ?></td>
					<td><?php echo $row["lieux"] ?></td></tr>
				 <?php } ?>

					</tbody>
		</table>
		<?php 
		}

		?>

		<div class="espace"></div>




		<script>
		   //fonction pour les bouton deroulant
			function ouvrirFermerSpoiler(bouton) {
				var divContenu = bouton.nextSibling;
				if(divContenu.nodeType == 3) divContenu = divContenu.nextSibling;
				if(divContenu.style.display == 'block') {
					divContenu.style.display = 'none';
				} else {
					divContenu.style.display = 'block';
				}
			}
		</script>

	</body>
</html>