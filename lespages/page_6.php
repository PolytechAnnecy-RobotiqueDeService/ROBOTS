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
  		/*connection*/
  		if(!isset($projectDir)){
				$projectDir = dirname ( __FILE__ , NIVEAU_HIÉARCHIQUE_DU_FICHIER_COURANT );	
			} 
  		if( file_exists("{$projectDir}/lespages/bd_connection.php") ){ 
				include("{$projectDir}/lespages/bd_connection.php");
			}


		/*requete*/
  		$sql = "SELECT id_membre, nom, prenom, mail FROM membre";
        $result = mysqli_query($conn, $sql) or die("Requête invalide: ". mysqli_error()."\n".$sql);

        echo ("<ul>\n");
        while ($row = mysqli_fetch_assoc($result)) {
           echo ("<li>\n".$row["nom"]." ".$row["prenom"].", ".$row["mail"]."</li>\n");
        }
        echo "</ul>\n";
  	?>

  	<h1> Commentaires </h1>
  	<p>Pour toutes remarques, vous pouvez aussi nous laissez un commentaire ci-dessous</p>

  	<form>
  	<input type="textarea">
    	<nom>Commentaire</nom>
    	<libellé>Formulez un commentaire</libellé>
    </input>
	</form>

  </body>

</html>