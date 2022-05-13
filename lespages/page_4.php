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
    <p>Bienvenue sur la page des archives ! Vous trouverez ici un résumé de chaque séance ainsi que les document PDF des comptes-rendus et autres rapports.</p> 

    <?php
    echo getcwd();


        $semestre[0]="Premier semestre";

        $presentation_semestre[0]="<p>Le semestre 6 de notre cycle ingénieur marque le premier semestre de travail sur notre APP. C’est donc un semestre essentiellement lié à la découverte des différents outils à notre disposition afin de pouvoir apprendre à les maîtriser. Si ce travail de découverte est essentiel pour avancer dans notre travail, le gros de notre projet, c’est-à-dire l’établissement d’un cahier des charges et une progression plus réfléchie du travail, n’interviendra qu’aux semestres suivants, quand nous saurons déjà nous servir correctement de notre environnement de travail. Notre apprentissage sur ce semestre se concentrera essentiellement sur la maîtrise et la compréhension du fonctionnement de Choregraphe, le logiciel codé en python pour utiliser les robots Pepper et Nao ; l’apprentissage et la maîtrise du langage JavaScript pour créer une application web ; et enfin la compréhension et la maîtrise du principe de serveur web dans le but d’en créer un lors des semestres suivant (son but étant de lier entre eux tous les différents éléments de notre projet). </p>";
        $bilan_semestre[0]="bilan du semestre + lien du rapport";

        $seance[0]="Première séance";
        $seance[1]="Deuxième séance";
        $seance[2]="Troisième séance";

        $date_seance[0]="<i>09/02/2022</i>";
        $date_seance[1]="<i>02/03/2022</i>";
        $date_seance[2]="<i>16/03/2022</i>";
        $date_seance[3]="<i>29/03/2022</i>";
        $date_seance[4]="<i>13/04/2022</i>";
        $date_seance[5]="<i>26/03/2022</i>";
        $date_seance[6]="<i>04/05/2022</i>";
        $date_seance[7]="<i>10/03/2022</i>";

        $compterendu[0]="<p> Cette première séance a été l’occasion de découvrir notre équipe et de mettre au point des objectifs pour le projet. </p><p> Dans le cadre du thème « robotique de service », nous avons rapidement émis l’idée de mettre en place, à l’aide des modèles de robots Pepper et Nao mis à notre disposition, un système de visite. Notre but à long terme serait de parvenir à présenter ces robots lors de portes ouvertes afin qu’ils participent à la visite du bâtiment Polytech Annecy. Nous avons ainsi listé plusieurs idées, donc certaines ont été abandonnées depuis pour des raisons de temps et de faisabilité et dont le détail se trouve dans le compte-rendu. </p><p> Bien que nous n’ayons pas commencé à pratiquer durant cette première séance, elle nous a permis de non seulement trouver un but auquel aboutir à la fin du projet, mais également de mieux cerner les difficultés qui se dressaient devant nous. Tous les détails de la séance sont disponibles dans le compte-rendu (rédigé par Jules Mison) téléchargeable ci-dessous.</p>
                        <a href=\"./documents/comptes_rendus/compte_rendu_1.pdf\" target=’_blank’>Compte-rendu de la séance 1</a>";
        $compterendu[1]="<p>résumé séance 2</p>";
        $compterendu[2]="<p>résumé séance 3</p>";

        
    ?>

    <?php
        echo "<ul>"; //liste des semestres

        $a=0;

        while (isset($semestre[$a])){ //parcours des semestres
            echo "<div class='semestre'><li><h2>".$semestre[$a]."</h2></li></br>"; //début div semestre

            if (isset($presentation_semestre[$a])){
                echo "<div class='text'>".$presentation_semestre[$a]."</div>";
            }

            $b=0;
            echo"<ul>"; //début liste séances

                while (isset($seance[$b])){ //parcours des séances
                    echo "<div class='seance'><li><h3> <button type='button' class='bouton'>".$seance[$b]."</button></h3></li> "; 
                    echo "<div class='text'><span class ='cr'>".$date_seance[$a].$compterendu[$b]."</span></div>";
                    echo"</div>";

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
