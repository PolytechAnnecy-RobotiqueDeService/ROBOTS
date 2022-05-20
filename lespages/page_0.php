
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="en">
<head>
	<link rel="stylesheet" href="acceuil.css" />
	<meta charset="utf-8">
	<title>Bienvenue à Polytech</title>
</head>
	
<body>
  <?php   
        /*Connexion à la base de données sur le serveur tp-epua*/
		$conn = @mysqli_connect("tp-epua:3308", "salhh", "fdxixbey");    
		
		/*connexion à la base de donnée depuis la machine virtuelle INFO642*/
		/*$conn = @mysqli_connect("localhost", "etu", "bdtw2021");*/  

		if (mysqli_connect_errno()) {
            $msg = "erreur ". mysqli_connect_error();
        } else {  
            $msg = "connecté au serveur " . mysqli_get_host_info($conn);
            /*Sélection de la base de données*/
            mysqli_select_db($conn, "salhh"); 
            /*mysqli_select_db($conn, "etu"); */ /*sélection de la base sous la VM info642*/
		
            /*Encodage UTF8 pour les échanges avecla BD*/
            mysqli_query($conn, "SET NAMES UTF8");
        }	
  ?> 
	<form action="/action_page_0.php">
	  <label for="gsearch">Recherche:</label>
	  <input type="search" id="gsearch" name="gsearch">
	  <a href=""><input type="button" value="Find">
	</form><!--pour creér un forum de recherche qui permet aux visiteure de faire la recherche sur la page, label pour le text et un botton d'entrer lier à l'action à faire-->
	
	<div class="container">
		<div id="fond">
			<h1>Bonjour</h1>

			<img id="image1" src="documents/images/welcome.jpg" /></p>

			<div class="inner">
				<h2>Nous sommes des étudiants de Polytech Annecy<br>
					on s'occupent du projet "RBOTIC".</h2>
				<p>Lors de notre formation d’ingénieur SNI, nous avons réalisé un projet selon une thématique que l’on peut nuancer à notre guise. <br>Notre projet porte sur la Robotique de Service (APP RS) et se déroule sur l’ensemble de nos 3 années de formation<br></p>
				<p>Ce projet permettra de vous faire visiter <br>
					les locaux de notre école à l'aide des deux robot NAO et PEPPER.<br></p>
			</div>
		</div>
		
		<div class="parent">
			<div class="son">
				<h2 id="h2pep">Robot PEPPER</h2>
				<img id="pepper"
					src="https://media.lesechos.com/api/v1/images/view/5c064bc03e45465f0d16da5a/1280x720/0211004984290-web.jpg" />
				<h2>Pepper est le premier robot humanoïde au monde capable d'identifier les visages et les principales
					émotions humaines. Pepper a été conçu pour interagir avec les humains de la façon la plus naturelle
					possible à travers le dialogue et son écran tactile.
					Pepper est aujourd'hui disponible pour les entreprises et le secteur de l'éducation. Déjà plus de
					2000
					entreprises ont adopté Pepper à travers le monde pour les assister de façon innovante dans
					l'accueil,
					l'information et l'orientation de leurs visiteurs.</h2>
					 <video width="700" height="400" controls>
   								 <source src="pepperv.mp4" type=video/mp4>
   					</video>
			</div>
			<div class="son">
				<h2 id="h2nao">Robot NAO </h2>
				<img id="nao" src="nao.jpg" /><br>
				<h2>NAO est le premier robot humanoïde créé par SoftBank Robotics. Aujourd'hui à sa 6ème version, NAO
					est
					célèbre dans le monde entier. Formidable outil de programmation, il est devenu une référence dans
					l'éducation et la recherche.Egalement utilisé en tant qu'assistant par les entreprises et
					établissements
					de santé, NAO permet d'accueillir, informer et divertir les visiteurs.<br>
					<p></p>
					</h2>
					<video width="700" height="400" controls>
   								 <source src="naov.mp4" type=video/mp4>
   					</video>
			</div>
		</div>
	</div>
	
	<div class="footer">
		<p align="center">merci pour votre visite </p>
	</div>
	<footer align="center">
 	<p id="foot" text-align="center"> Adresse:5 chemin Bellevue / Annecy-le-Vieux / 74940 ANNECY / FRANCE - Tél : +33(0)450 096 600  <a href="https://www.polytech.univ-smb.fr/">Site Web</a></p>
 
	</footer><!-- on utilise footer comme pied de la page;
	chaque site web a une forme générale  -->

</body>
</html>
