<!DOCTYPE html>
<html  dir="ltr" lang="fr" xml:lang="fr">
	<head>
		<meta charset="utf-8" />
		<link type="text/css" rel="stylesheet" href="/projet/styles/Connexion.css">
		<script type="text/javascript" src="/projet/JS/script_inscription_connexion.js"></script>
		<title>Connexion</title>
	</head>

	<body>

			<?php require_once("../header_footer/header.php");
			?>



		<h1> Bienvenue sur le serious game ! </h1>

		<form method="post" action="../CONTROLEUR/connecter.php" onsubmit="return verifie_champs_connexion()">

			<p>
				<label for="Login">Nom d'utilisateur : </label></br>
				<input id="Login" type="text" name="Login"  onblur="verifLogin()"/>
			</p>
			  <p id="MessageErreurLogin" class="MessageErreur"> <br/></p>

			<p>
				<label for="Password">Mot de passe : </label></br>
				<input id="Password" type="password" name="Password"  onblur="verifPassword()"/>
			</p>
			  <p id="MessageErreurPassword" class="MessageErreur"> <br/></p>

			<p class="boutons">
				<input type="submit" name="connexion" value="Se connecter" class="button">
				<a href="/projet/VUE/Inscription.php"><input type="button" name="inscription" value="S'inscrire" class="button"></a>
			</p>
		</form>


			<?php require_once("../header_footer/footer.php");
	    ?>

	</body>
</html>
