<!DOCTYPE HTML>

<html>

  <head>
	<title>APP Robots</title>
	<meta charset="UTF-8">
    <link rel="stylesheet" media="screen" href="lespages/ROBOTS.css" /> 
	<link rel="icon" type="image/png" sizes="16x16" href="documents/icone_site.png"> 
  </head>
	
  <body>
  	<h1> Nos contacts </h1>
  	<p>Pour tout renseignement, vous pouvez contacter notre équipe à l'aide des informations suivantes : </p>
  	
  	<?php
		  /*requete pour afficher tous les membres*/
  		$sql = "SELECT id_membre, nom, prenom, mail FROM ROBOTS_membre";
		$result = mysqli_query($conn, $sql) or die("Requête invalide: ". mysqli_error()."\n".$sql);

		echo ("<ul>");
		while ($row = mysqli_fetch_assoc($result)) {
			echo ("<li>".$row["nom"]." ".$row["prenom"]." : ".$row["mail"]."</li>");
		}
		echo "</ul>";
  	?>

  	<h1> Commentaires </h1>
  	<p>Pour toutes remarques, vous pouvez aussi nous laissez un commentaire ci-dessous</p>

    <form action="ROBOTS.php" method="get">
		<textarea name="commentaire" rows="10" cols="30" required></textarea><br>
		<input type="hidden" name="page" value="6" />
		<button type="submit">Envoyer</button>
    </form>

    <?php

    /* insertion commentaire dans la BDD*/
    if (isset($_GET["commentaire"])) {
		$commentaire = str_replace("'","''",$_GET["commentaire"]);
		$sql = "INSERT INTO ROBOTS_commentaire (commentaire) VALUES ('".$commentaire."');";
		$result = mysqli_query($conn, $sql) or die("Requête invalide: ". mysqli_error()."\n".$sql);
	}
    ?>

    <h1> Anciens commentaires </h1>
    <p>Voici tous les commentaires laissés par tous les utilisateurs précédemment !</p>

    <?php

		/*requete pour afficher tous les commentaires*/
		$sql = "SELECT id_commentaire, commentaire FROM ROBOTS_commentaire";
		$result = mysqli_query($conn, $sql) or die("Requête invalide: ". mysqli_error()."\n".$sql);

		echo ("<ul>\n");
		while ($row = mysqli_fetch_assoc($result)) {
			echo ("<li>\n".$row["commentaire"]."</li>\n");
		}
		echo "</ul>\n";

    ?>
  </body>

</html>