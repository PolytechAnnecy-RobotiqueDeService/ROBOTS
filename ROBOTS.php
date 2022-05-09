<!DOCTYPE HTML>

<html>

  <head>
    <title></title>
    <meta charset="UTF-8">
  </head>
  
	<?php
		if(!isset($projectDir)){
			$projectDir = dirname ( __FILE__ , 1 );	
		}
		if(!isset($basehttp)){
			$login = file_get_contents("{$projectDir}/VOTRE_LOGIN.txt");
			$basehttp = "https://tp-epua.univ-smb.fr/~{$login}/";	
		}	
	?>
	
	<?php  
		$encours = array(" "," "," "," "," ");

		if( !isset($_GET["page"]) ) { 
			$page=0;
		}else{
			$page=$_GET["page"];
		}
		$encours[$page] = "encours";
	?> 
	

	<body>
		<div id="main">
			<?php
				if( file_exists("{$projectDir}/lespages/page_".$page.".php") ){ 
					include("{$projectDir}/lespages/page_".$page.".php");
				}else{
					echo("Fichier {$projectDir}/lespages/page_".$page.".php est inexistant.");
				}
			?>
		</div>
	</body>
</html>  
  