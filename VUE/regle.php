<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="regle.css" rel="stylesheet"/>
</head>
<body>

<?php
	require_once("header.php");
	echo "<p>Bienvenue sur le site \"Orsec - Serious Game\" !!
		</br> Avant de commencer, voici quelques informations et explications concernant le jeu.</p
	<p>Le but du jeu est de simuler un accident grave et sa gestion par les différents acteurs mis en jeu.</p>
	<p>Dans cette simulation, vous incarnez le rôle d'un des 6 décideurs suivants : </p>
	<p>
		<ul>
			<li>Chef de la police</li>
			<li>Chef des pompiers</li>
			<li>Médecin trieur</li>
			<li>Médecin répartiteur</li>
			<li>CRRA</li>
			<li>Médecin responsable</li>
		</ul>
	</p>
	<p>Chaque rôle est différent et permet de gérer un aspect particulier de la crise.
	</br>Par exemple, le chef de la police décide quel nombre de policiers il souhaite déployer sur les lieux de l'accident et à proximité, et leur affecte à chacun un rôle précis (gestion de la circulation, surveillance de la morgue, ...).</p>
	<p>Un rôle vous est attribué par le maître du jeu avant chaque nouvelle partie.
	</br>En fonction de ce rôle, vous n'avez accès qu'à certaines ressources (policiers, ambulances, médecins, ...) et ne voyez que certains éléments de la simulation.</p>
	<p>Chacun des 6 rôles sont décrits plus précisément sur la page prévue à cet effet.</p>
	<p>Les ressources que vous avez à votre disposition vous sont présentées dans le tableau à gauche de votre écran.
	</br>Le tableau contient toutes les icônes des différentes ressources disponibles pour une simulation, mais certaines d'entre elles sont grisées : cela signifie que vous n'avez pas accès à ces ressources.
	</br>Les ressources qui ne sont pas grisées sont celles que votre rôle vous autorise à manipuler.
	<p>Pour utiliser ces ressources, il vous suffit de cliquer sur l'icône souhaitée, une liste déroulante des différentes actions disponibles avec cette ressource apparaîtra alors.
		</br>Pour en sélectionner une, il vous suffit de cliquer dessus. Si l'action choisie nécessite un déplacement, vous pouvez faire glisser l'icône jusqu'à l'endroit souhaité sur la map.</p>
	<p>Des actions sont également disponibles sur les ressources déjà présentes sur la map.
	</br>Pour y accéder, vous n'avez qu'à cliquer sur une ressource et la liste des actions disponibles apparaîtra de la même manière que précédemment.</p>
	<p>Au cours de la partie, vous pourrez communiquer avec les autres joueurs via la fenêtre de chat, située en bas à droite de votre écran.</p>
	<p>Le nombre de ressources est limité et fixé par le maître du jeu.
	</br>Toutefois, vous pourrez effectuer des demandes de renfort au cours de la partie, en cliquant sur le bouton \"Demande de renforts\".</p>";







?>

<footer> <?php require_once("footer.php"); ?> </footer>

</body>
</html>
