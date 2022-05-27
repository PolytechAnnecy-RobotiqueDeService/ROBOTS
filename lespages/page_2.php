<html>
<link rel="stylesheet" href="./lespages/page_2.css"/>
<head><title>Suivi de projet</title></head>
<link rel="icon" type="image/png" sizes="16x16" href="pepper.png">

<body>
<h1>Suivi du Projet :</h1>
    <!--carroussel d'images du projet-->
    <div class="carroussel">
      <div class="points">
        <label for="slide-dot-1"></label>
        <label for="slide-dot-2"></label>
      </div>
      
      <input class="slide-input" id="slide-dot-1" type="radio" name="slides" checked>
      <img class="slide-img" src="./documents/images/welcome.jpg">

      <input class="slide-input" id="slide-dot-2" type="radio" name="slides">
      <img class="slide-img" src="./documents/images/Rpepper.jpg">
    </div>


    <div id = "en_cours">
        <p>Bienvenue sur la page de suivi de notre projet. Ici, vous retrouverez un résumé de toutes nos avancées techniques, ainsi que des informations sur les aspects en cours de développement !</p>
        <!--<p id=video1><video controls width="500" height="320"><source src="./documents/videos/video1.mp4"></video></p></br>
        potentiellement une video de presentation de pepper
        -->
        <p><strong>Développement en cours :</strong></p>
        <ul>
            <li>Essayer de faire se déplacer Pepper par suivi de mur à l'aide de ses capteurs de distance. Voici une vidéo de démonstration où Pepper négocie un virage :</br>
            <p id=video1><video class="video" controls><source src="./documents/videos/capsule_demo_deplacement.mp4"></video></p>
            </li>
			</br>
            <li>Alternance entre le suivi de mur gauche ou droit</li>
			</br>
            <li>Développement d'une méthode de synthèse vocale pour Nao ou Pepper dans le but de faciliter les interactions orales</li>
			</br>
            <li>Développement du réseau pour la communication entre les robots et un serveur</li>
			</br>
            <li>Création de la page web qui sera affichée sur Pepper, qui permettrait notamment de lui demander un guidage particulier</li>
        </ul>
        </br>
    </div>
    <div id="update1">
        <p><strong>Développement terminé :</strong></p>
        <ul>
            <li>Entraînement de Nao à reconnaître un texte dicté mot à mot grâce à une banque de mots reconnus contenue dans un fichier texte</li>
			</br>
            <li>Suivi d'un mur par Pepper et correction de sa trajectoire en ligne droite</li>
    </div>





    <!--<div id="galerie_photo">    il faudrait rajouter des photos dans la galerie
        </br>
        <p>Galerie photo :</p>
        <div id = "image"><img src = "./documents/images/image1.jpg" sizes="16x16"><img src = "./documents/images/image2.jpg" sizes="16x16"><img src = "./documents/images/image1.jpg" sizes="16x16"><img src = "./documents/images/image1.jpg" sizes="16x16"></div>
    </div>
        <img src = "pepper2.jpg">
    <div>
    

    </div>
    -->
</body>
</html>
