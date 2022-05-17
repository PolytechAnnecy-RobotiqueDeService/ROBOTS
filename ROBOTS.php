<!DOCTYPE HTML>

<html>

  <head>
	<title>APP Robots</title>
	<meta charset="UTF-8">
    <link rel="stylesheet" media="screen" href="lespages/ROBOTS.css" /> 
	<link rel="icon" type="image/png" sizes="16x16" href="documents/icone_site.png"> 
  </head>
	
  
	<?php
		// Définition de variables 
		if(!isset($projectDir)){
			$projectDir = dirname ( __FILE__ , 1 );	
		}
		if(!isset($basehttp)){
			if( file_exists("{$projectDir}/VOTRE_LOGIN.txt") ){ 
				$login = file_get_contents("{$projectDir}/VOTRE_LOGIN.txt");
				$basehttp = "https://tp-epua.univ-smb.fr/~{$login}/";
			}else{
				$basehttp = "https://tp-epua.univ-smb.fr/~VOTRE_LOGIN/";
			}			
		}
	?>
	
	<?php
		// Mécanisme de changements de pages
	$encours = array(" "," "," "," "," "," "," ");

		if( !isset($_GET["page"]) ) { 
			$page=0;
		}else{
			$page=$_GET["page"];
		}
		$encours[$page] = "encours";
	?>

	<body>
		<div id="fond">
			</br>
			<div id="titre">
				<span>APP ROBOTS</span>
			 </div>
			</br>
			
			
				<div id="menu">
					<ul id="lemenu">
					
						<?php // Liste des pages pages dans des boutons pour le menu
							echo "<li><a href=\"?page=0\" class=\"btn_menu $encours[0]\">Accueil</a></li>\n";
							echo "<li><a href=\"?page=1\" class=\"btn_menu $encours[1]\">Objectifs</a></li>\n";
							echo "<li><a href=\"?page=2\" class=\"btn_menu $encours[2]\">Avancement</a></li> \n";  
							echo "<li><a href=\"?page=5\" class=\"btn_menu $encours[5]\">Les robots</a></li> \n";  
							echo "<li><a href=\"?page=3\" class=\"btn_menu $encours[3]\">Notre équipe</a></li> \n";   
							echo "<li><a href=\"?page=4\" class=\"btn_menu $encours[4]\">Archives</a></li> \n"; 
							echo "<li><a href=\"?page=6\" class=\"btn_menu $encours[6]\">Contact</a></li> \n"; 
						?> 

					</ul>
				</div>

				<div id="contenu">

					<?php // Contenu général de la page en cours
						if( file_exists("{$projectDir}/lespages/page_".$page.".php") ){ 
							include("{$projectDir}/lespages/page_".$page.".php");
						}
					?>
				</div>
					
				</br></br>
			 

			
		
		</div>

		<div id="pied">
				<span>Polytech Annecy-Chambéry - Apprentissage Par Projets - Robots</span>
		</div>

	</body>
</html>  
  