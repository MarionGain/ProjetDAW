<!DOCTYPE html>
<html  dir="ltr" lang="fr" xml:lang="fr">
	<head>
		<meta charset="utf-8" />
		<link type="text/css" rel="stylesheet" href="../public/css/connexion.css">
		<script type="text/javascript" src="../public/js/script_inscription_connexion.js"></script>
		<title>Connexion</title>
	</head>

	<body>

		<header><?php require_once("header.php");?></header>

		<h1> Bienvenue sur le serious game ! </h1>

		<form method="post"  action='../controller/connecter.php' onsubmit="return verifie_champs_connexion()">

			<p>
				<label for="login">Nom d'utilisateur : </label></br>
				<input id="login" type="text" name="login" onblur="verifLogin()"/>
			</p>
			<p id="MessageErreurLogin" class="MessageErreur"> <br/></p>
			<p>
				<label for="password">Mot de passe : </label></br> 
				<input id="password" type="password" name="password"  onblur="verifPassword()"/>
			</p>

			  <p id="MessageErreurPassword" class="MessageErreur"> <br/></p>
			<p class="boutons">
				<input type="submit" name="connexion" value="Se connecter" class="button">
				<a href="./inscription.php"><input type="button" name="inscription" value="S'inscrire" class="button"></a>
			</p>
		</form>
	
		<footer>
			<?php require_once("footer.php"); ?>
	  	</footer>
	</body>
</html>
