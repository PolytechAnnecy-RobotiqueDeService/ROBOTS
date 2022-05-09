<!DOCTYPE HTML>

<html>

  <head>
	<title>APP Robots</title>
	<meta charset="UTF-8">
    <meta content="info">
    <link rel="stylesheet" media="screen" href="lespages/ROBOTS.css" /> 
	<link rel="icon" type="image/png" sizes="16x16" href="documents/icone_site.png"> 
  </head>
	
  
	<?php
		/*if(!isset($projectDir)){
			$projectDir = dirname ( __FILE__ , 1 );	
		}
		if(!isset($basehttp)){
			$login = file_get_contents("{$projectDir}/VOTRE_LOGIN.txt");
			$basehttp = "https://tp-epua.univ-smb.fr/~{$login}/";	
		}	*/
	?>
	
	

	<body>
	<div id="fond">
    
	<div id="titre">
		<span>APP ROBOTS</span>
	 </div>

	<div id="menu">
		<ul id="lemenu">
		<?php  
			$encours = array(" "," "," "," "," ");

			if( !isset($_GET["page"]) ) { 
				$page=0;
			}else{
				$page=$_GET["page"];
			}
			$encours[$page] = "encours";
			
			echo "<li><a href=\"?page=0\" class=\"btn_menu $encours[0]\">Accueil</a></li>\n";
			echo "<li><a href=\"?page=1\" class=\"btn_menu $encours[1]\">Objectifs</a></li>\n";
			echo "<li><a href=\"?page=2\" class=\"btn_menu $encours[2]\">Avancement</a></li> \n";   
			echo "<li><a href=\"?page=3\" class=\"btn_menu $encours[3]\">Notre équipe</a></li> \n";   
			echo "<li><a href=\"?page=4\" class=\"btn_menu $encours[4]\">Archives</a></li> \n"; 
		?> 

		</ul>
	</div>

	<div id="contenu">

		<?php
			if( file_exists("page_".$page.".php") ){ 
				include("page_".$page.".php");
			}
		?>
	
	</div>

	

	</div>
		</br></br>
	<div id="pied">
			<span>Polytech Annecy-Chambéry - Apprentissage Par Projets - Robots</span>
	</div>

	</body>
</html>  
  