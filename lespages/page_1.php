<!DOCTYPE html>
<html>
    <head>
		<h1 class="titre">But et Objectif</h1>
		<link rel="stylesheet" href="lespages/page_1.css">
    </head>
<body>
	<h3>Objectif :</h3>
	<p>Le thème de notre projet est la robotique de service. Notre but est donc d’utiliser des robots, tels que les robots Pepper ou Nao, pour subvenir à des besoins de services à l'être humain, par exemple dans un contexte de guidage. Ce qu’on appelle guidage est plus globalement la faculté du robot à guider des personnes dans un bâtiment quelconque, tout en interagissant avec elles, afin de leur indiquer leur chemin.
	Pour commencer ce projet, nous avons choisi de se baser sur le bâtiment de Polytech Annecy et plus précisément de programmer Pepper pour qu’il puisse déjà se repérer à l’étage 2 où notre salle d’APP se situe. Il aura la charge, lors d’une Journée Porte Ouverte (JPO), d’indiquer les salles intéressantes à visiter en fonction des préférences des visiteurs dans cet étage. </p>
	



<h3>Liste des fonctionalités pour Pepper :</h3>
<ul>
    <li>Se repérer dans son environnement<div class="spoiler">
    <!--bouton plus d'info -->
    <input type="button" class="boutonSpoiler" value="Plus d'info" onclick="ouvrirFermerSpoiler(this);" />
    <div class="contenuSpoiler"><!--texte cacher -->
        Le robots doit etre capable de se repérer dans son environnement, plus précisément au sein d’un bâtiment, par exemple qu’il sache reconnaître les salles qui l’entourent, afin de proposer des trajets préférentiels aux visiteurs.
    </div><br/> 
	</div></li>

    <li>Interagir avec les humains<div class="spoiler">
    <input type="button" class="boutonSpoiler" value="Plus d'info" onclick="ouvrirFermerSpoiler(this);" />
    <div class="contenuSpoiler">
        Comprendre les interlocuteurs, savoir interpréter des paroles et réagir en fonction de ce qui a été énoncé, notamment en utilisant la synthèse vocal ou encore grâce à sa tablette tactile.
    </div><br/> 
	</div></li>
	
	<li>Accompagner les visiteurs<div class="spoiler">
    <input type="button" class="boutonSpoiler" value="Plus d'info" onclick="ouvrirFermerSpoiler(this);" />
    <div class="contenuSpoiler">
        Pouvoirs sur demande emener un groupe de visiteurs a un point demander ou definis.
    </div><br/> 
	</div></li>
	
	<li>Se déplacer sans se perdre<div class="spoiler">
    <input type="button" class="boutonSpoiler" value="Plus d'info" onclick="ouvrirFermerSpoiler(this);" />
    <div class="contenuSpoiler">
        Pepper doit pouvoirs se deplacer le plus fluidement possible, sans se perdre, cogner les murs, en reconnaissance les portes (et donc de salles) et ne pas confondre l’ouverture d’une porte avec un virage dans un couloir.
    </div><br/> 
	</div></li>
	
	
	
	<h3>Liste des fonctionalités pour Nao :</h3>
	
	<li>Accueillir les visiteurs dans le hall<div class="spoiler">
    <!--bouton plus d'info -->
    <input type="button" class="boutonSpoiler" value="Plus d'info" onclick="ouvrirFermerSpoiler(this);" />
    <div class="contenuSpoiler"><!--texte cacher -->
        Nao doit être en capacité d'accueillir les visiteurs et leur expliquer comment marche la visite.
    </div><br/> 

	</div>
	</li>

    <li> Présentation générale<div class="spoiler">
    <input type="button" class="boutonSpoiler" value="Plus d'info" onclick="ouvrirFermerSpoiler(this);" />
    <div class="contenuSpoiler">
        Il doit être en capacité de faire une présentation générale de Polytech, de ces spécialiser, des matières ...
    </div><br/> 
	</div></li>
	
	<li>Repondre au question<div class="spoiler">
    <input type="button" class="boutonSpoiler" value="Plus d'info" onclick="ouvrirFermerSpoiler(this);" />
    <div class="contenuSpoiler">
        Nao doit pouvoir comprendre et répondre à des questions posées par ses interlocuteurs, s'il ne peut pas, il doit rediriger vers une autre personne.
    </div><br/> 
	</div></li>
	
	<li>Communiquer avec Pepper<div class="spoiler">
    <input type="button" class="boutonSpoiler" value="Plus d'info" onclick="ouvrirFermerSpoiler(this);" />
    <div class="contenuSpoiler">
        Nao a aussi pour rôle de prévenir pepper que des personne veux faire une visite.
    </div><br/> 
	</div></li>
	</ul>
	<h3>Un bonus dans notre projet :</h3>
		Un second Pepper devrait arriver d’ici la fin du projet. Nous avons imaginé de le mettre au premier étage et qu’il puisse aussi communiquer avec NAO et le Pepper que nous possédons déjà. Puisque la conception de programme embarqué dans les robots Pepper n’est pas spécifique à un seul robot et que l’information du bâtiment est gardée au niveau du serveur, il est facile d’ajouter un nombre arbitraire de robots à la flotte de guides. 






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