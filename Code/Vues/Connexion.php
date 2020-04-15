<!DOCTYPE html>
<html  dir="ltr" lang="fr" xml:lang="fr">
	<head>
		<meta charset="utf-8" />
		<link type="text/css" rel="stylesheet" href="Connexion.css">
		<title>Connexion</title>
	</head>

	<body>

		<header><?php require_once("header.php");?></header>

		<h1> Bienvenue sur le serious game ! </h1>

		<form method="post" action="connexion.php">

			<p>
				<label for="login">Nom d'utilisateur : </label></br>
				<input id="login" type="text" name="login" />
			</p>

			<p>
				<label for="password">Mot de passe : </label></br> 
				<input id="password" type="password" name="password"/>
			</p>

			<p class="boutons">
				<input type="button" name="connexion" value="Se connecter" class="button">
				<a href="./Inscription.php"><input type="button" name="inscription" value="S'inscrire" class="button"></a>
			</p>
		</form>
	
		<footer>
			<?php require_once("footer.php"); ?>
	  	</footer>
	</body>
</html>
