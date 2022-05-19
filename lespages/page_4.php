<!DOCTYPE HTML> 

<html>
<head>
    <title></title>
    <meta content="info">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="archive.css"/>
</head>

<body>
<div id='fond'>
    <h1>Archives</h1>
    <p>Bienvenue sur la page des archives ! Vous trouverez ici un résumé de chaque semestre et de chaque séance, ainsi que les liens vers les PDF des archives à proprement parler, c’est-à-dire les différents comptes-rendus et rapports. Cette page sera mise à jour au fur et à mesure de l’avancement du projet. </p> 

    <?php
    //echo getcwd();


        $semestre[1]="Premier semestre";

        $presentation_semestre[1]="<p>Le semestre 6 de notre cycle ingénieur marque le premier semestre de travail sur notre APP. C’est donc un semestre essentiellement lié à la découverte des différents outils à notre disposition afin de pouvoir apprendre à les maîtriser. Si ce travail de découverte est essentiel pour avancer dans notre travail, le gros de notre projet, c’est-à-dire l’établissement d’un cahier des charges et une progression plus réfléchie du travail, n’interviendra qu’aux semestres suivants, quand nous saurons déjà nous servir correctement de notre environnement de travail. Notre apprentissage sur ce semestre se concentrera essentiellement sur la maîtrise et la compréhension du fonctionnement de Choregraphe, le logiciel codé en python pour utiliser les robots Pepper et Nao ; l’apprentissage et la maîtrise du langage JavaScript pour créer une application web ; et enfin la compréhension et la maîtrise du principe de serveur web dans le but d’en créer un lors des semestres suivant (son but étant de lier entre eux tous les différents éléments de notre projet). </p>";
        $bilan_semestre[1]="bilan du semestre + lien du rapport";

        $seance[1]="Première séance";
        $seance[2]="Deuxième séance";
        $seance[3]="Troisième séance";
        $seance[4]="Quatrième séance";
        $seance[5]="Cinquième séance";
        $seance[6]="Sixième séance";
        $seance[7]="Septième séance";
        $seance[8]="Huitième séance";

        $date_seance[1]="<i>09/02/2022</i>";
        $date_seance[2]="<i>02/03/2022</i>";
        $date_seance[3]="<i>16/03/2022</i>";
        $date_seance[4]="<i>29/03/2022</i>";
        $date_seance[5]="<i>13/04/2022</i>";
        $date_seance[6]="<i>26/03/2022</i>";
        $date_seance[7]="<i>04/05/2022</i>";
        $date_seance[8]="<i>10/03/2022</i>";

        $compterendu[1]="<p>Cette première séance a été l’occasion de découvrir notre équipe et de mettre au point des objectifs pour le projet. </p><p> Dans le cadre du thème « robotique de service », nous avons rapidement émis l’idée de mettre en place, à l’aide des modèles de robots Pepper et Nao mis à notre disposition, un système de visite. Notre but à long terme serait de parvenir à présenter ces robots lors de portes ouvertes afin qu’ils participent à la visite du bâtiment Polytech Annecy. Nous avons ainsi listé plusieurs idées, donc certaines ont été abandonnées depuis pour des raisons de temps et de faisabilité et dont le détail se trouve dans le compte-rendu. </p><p> Bien que nous n’ayons pas commencé à pratiquer durant cette première séance, elle nous a permis de non seulement trouver un but auquel aboutir à la fin du projet, mais également de mieux cerner les difficultés qui se dressaient devant nous. Tous les détails de la séance sont disponibles dans le compte-rendu (rédigé par Jules Mison) disponible ci-dessous.</p>";
        $compterendu[2]="<p>Cette deuxième séance a été très similaire à la première. Nous nous sommes concentrés sur notre projet à long terme et avons décidé de commencer une amorce de cahier des charges. Bien que ce travail ne soit pas demandé avant le semestre suivant, le fait de prendre du recul sur nos objectifs et les difficultés qui nous attendent nous ont permis de mieux structurer notre pensée et ainsi mieux nous organiser dans notre travail. Nous avons ainsi dégagé trois grandes parties auxquelles nous continuerons à faire référence tout au long de ce semestre : le serveur, Nao, et Pepper. </p><p> Le travail « algorithme de suivi de mur » sur Pepper consiste à réussir à faire se déplacer indépendamment le robot à l’aide d’un algorithme de suivi de mur et se repérer dans le bâtiment afin d’emmener les visiteurs où ils le souhaitent (dans la limite d’un étage). </p><p> Le travail « communication orale » sur Nao est surtout un travail de communication. Nao n’étant pas suffisamment stable et sa batterie n’est pas assez puissante pour se déplacer comme Pepper, son rôle serait simplement d’interagir avec les visiteurs pour leur communiquer des informations. </p><p> Et enfin, le travail sur le serveur consiste dans un premier temps à se renseigner sur les serveurs afin de comprendre comment s’en servir pour relier tous les éléments de notre projet. </p><p> Tous les détails de la séance sont disponibles dans le compte-rendu (rédigé par Hamza Salh) disponible ci-dessous. </p>";
        $compterendu[3]="<p>Entre la deuxième et la troisième séance, notre responsable de projet Monsieur Vernier nous a transmis le programme Choregraphe du groupe d’APP Robot de deux ans avant nous. Nous avons ainsi pu bénéficier de leurs recherches pour mieux comprendre leur algorithme de suivi de mur. Nous avons également accès à leur programme de déplacement vers les différentes salles, mais cette partie du projet ne sera pas abordée durant ce semestre. </p><p>Nous avons commencé à coder et expérimenter sur les robots durant cette séance. Nous avons notamment remarqué la nécessité du programme de suivi de mur, évoqué lors de la première séance par Monsieur Vernier, car Pepper ne reste pas en ligne droite durant son déplacement, et le suivi de mur lui permet de se repérer dans un couloir (le long d’un mur) afin de réajuster sa trajectoire lorsqu’il s’en détourne. </p><p>Nous avons également bénéficié d’une formation sur l’utilisation de la tablette de Pepper, sur laquelle nous comptons développer une application web en guise d’interaction avec l’utilisateur. Cette interface web fera l’objet de la quatrième grande partie de ce semestre. Le lien entre la tablette et Pepper sera fait à l’aide d’un serveur. </p><p>Enfin, sur la partie communication, nous avons commencé à comprendre les différentes fonctions présentes sur Choregraphe et avons fait lire un fichier texte à Nao. </p><p>Tous les détails de la séance sont disponibles dans le compte-rendu (rédigé par Florian Ruiz) disponible ci-dessous. </p>";
        $compterendu[4]="<p>Pendant cette séance, les rôles ont commencé à mieux se définir et l’avancement a été plus conséquent.</p><p>Sur Pepper, nous avons maîtrisé les commandes vocales simples, et mesuré le déplacement perpendiculairement à la direction demandée sur un mouvement de ligne droite. Nous avons créé un bloc Choregraphe permettant un mouvement en boucle fermée et mesurer une marge incompressible de 30 cm entre Pepper et un obstacle, causant l’arrêt du robot. Enfin, nous avons amélioré la fluidité des mouvements lors des déplacements. Nous avons rencontré des difficultés lors de la marche arrière et des rotations. </p><p>Sur la partie communication effectuée sur le robot Nao, nous avons analysé et expérimenté sur le fonctionnement du bloc SpeechReco permettant au robot de lire un texte. Nous avons créé un fichier des 600 mots les plus utilisés dans la langue française afin que le robot soit capable de les reconnaître à l’oral et de les répéter. Nous avons également créé un fichier sur lequel Nao peut retranscrire les mots qu’il entend dans le but de pouvoir, à terme, exploiter ce fichier et l’envoyer au serveur afin qu’il l’analyse et le traite. Nous avons rencontré quelques problèmes tels que l’écrasement des mots entendus par Nao par le dernier mot entendu et le fait que le robot ne comprenne, pour le moment, qu’un mot à la fois. Remarque : Le travail effectué sur Nao est tout-à-fait transposable sur Pepper. </p><p> Pour l’application web, nous avons testé l’affichage d’images et de textes sur la tablette et commencé à créer l’application en elle-même ainsi que des recherches. </p><p>La partie serveur s’est surtout composée de recherches. </p><p>Tous les détails de la séance sont disponibles dans le compte-rendu (rédigé par Cloé Léglise) disponible ci-dessous. </p>";
        $compterendu[5]="<p>Durant cette séance, en plus du travail habituel résumé à partir du prochain paragraphe, nous avons remarqué que nous commencions à avoir des codes intéressants et exploitables pour la suite et ainsi décidé de créer un git commun. </p><p> Sur Pepper, nous avons réussi à mieux comprendre la disposition et le fonctionnement des capteurs dont il se sert pour se repérer dans l’espace, ce qui sera utile pour créer notre programme de suivi de mur. Nous avons toujours des problèmes de rotation. </p><p>Nous avons avancé le site de l’application web tout en nous aidant du site des anciens élèves. Nous avons commencé à essayer de faire le lien entre la tablette et Choregraphe, mais cela pose des difficultés. </p><p>Nous pu analyser le serveur des anciens élèves afin de mieux nous rendre compte de son organisation et de son fonctionnement. Nous avons également pu bénéficier d’une formation sur les serveurs.</p><p>Tous les détails de la séance sont disponibles dans le compte-rendu (rédigé par Marine Sangouard) disponible ci-dessous. </p>";
        $compterendu[6]="<p>Lors de cette séance, nous avons réussi à faire avancer Pepper en ligne droite et en suivant le mur et réussi à mesurer une distance exacte pour une consigne de déplacement donnée. </p><p>Nous avons ajusté le fichier de la liste des mots compris par le robot Nao. Nous avons ainsi complété le travail de la séance précédente sur la compréhension orale du robot, même si nous n’avons toujours pas accès au fichier retranscrit sur l’ordinateur, et créé un nouveau bloc Choregraphe permettant de demander à Nao de lire une ligne précise d’un fichier texte. </p><p>Nous avons continué la création de l’application web et ajouté des pages permettant de sélectionner une destination sur un plan. </p><p>Nous avons créé un premier exemple de serveur avec client interne et effectué un premier essai de serveur Multithread en Python. </p><p>Tous les détails de la séance sont disponibles dans le compte-rendu (rédigé par Mehdi Benhima) disponible ci-dessous. </p>";
        $compterendu[7]="<p>Cette séance étant l’avant-dernière avant la soutenance, nous avons décidé de commencer à travailler sur ladite soutenance et son organisation. Nous avons fait ça en fin de séance. </p><p>Le programme de suivi de mur avance bien. Il fonctionne désormais pour un mur à droite ou à gauche, et Pepper est capable de changer de mur en cas d’ouverture d’un côté. Nous avons également mis en place une fonction qui lui permet d’ignorer les virages si un couloir s’ouvre sur un côté. </p><p>Le travail de communication a permis de récupérer le fichier audio d’un texte prononcé à l’oral devant Nao, le but à long terme étant de pouvoir envoyer ce fichier au serveur afin qu’il l’exploite. </p><p>Sur l’application web, nous avons créé un menu et continué les pages dédiées aux salles de TD et aux salles de TP. Nous avons un problème de lecture de médias tels que les vidéos, et la liaison entre la tablette et Choregraphe est encore difficile. </p><p>Nous avons réussi à créer des serveurs simples à un ou plusieurs clients internes. Les essais avec des clients externes, lors de la tentative de récupération du fichier audio de Nao, sont restés infructueux. </p><p>Tous les détails de la séance sont disponibles dans le compte-rendu (rédigé par Camille Jenny) disponible ci-dessous. </p>";
        $compterendu[8]="<p>Pour cette dernière séance du semestre, nous nous sommes concentrés sur la mise en commun de nos avancées respectives et la rédaction de notre rapport de fin de semestre ainsi que l’organisation de notre soutenance. Nous avons également réalisé des vidéos de démonstration du suivi de mur de Pepper. </p><p>Tous les détails de la séance sont disponibles dans le compte-rendu (rédigé par Nicolas Roy) disponible ci-dessous. </p>";

        
    ?>

    <?php
        echo "<ul>"; //liste des semestres

        $a=1;

        while (isset($semestre[$a])){ //parcours des semestres
            echo "<div class='semestre'><li><h2>".$semestre[$a]."</h2></li></br>"; //début div semestre

            if (isset($presentation_semestre[$a])){
                echo "<div class='text'>".$presentation_semestre[$a]."</div>";
            }

            $b=1;
            echo"<ul>"; //début liste séances

                while (isset($seance[$b])){ //parcours des séances
                    echo "<div class='seance'><li><h3> ".$seance[$b]."</h3></li> "; 
                    echo "<div class='text'><span class ='cr'>".$date_seance[$b].$compterendu[$b]."<a href=\"./documents/compterendus/APP_Robot_Seance_".$b.".pdf\" target=’_blank’>Compte-rendu de la séance ".$b."</a></span></div>";
                    echo "</div></br>";

                    $b++;

                }

            echo "</br>";

            if (isset($bilan_semestre[$a])){
                echo "<h3>Bilan du semestre</h3><div class = 'text'>".$bilan_semestre[$a]."</div>";
            }
            
            $a++;

            echo"</ul></div>"; //fin du semestre

        }

        echo"</ul>"; //fin de la liste des semestres

    ?>




</div>


</body>
</html>
