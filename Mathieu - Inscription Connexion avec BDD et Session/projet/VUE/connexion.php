

<!DOCTYPE html>
<html  dir="ltr" lang="fr" xml:lang="fr">
<head>
   <link type="text/css" rel="stylesheet" href="../styles/connexion.css">
   <link type="text/css" rel="stylesheet" href="../styles/header_footer.css">
	<title>Page de connexion</title>
</head>


<body>
  <?php require('../header_footer/header.php'); ?>

	<form method="post" action="../CONTROLEUR/connecter.php">
    <br>
    <p> <label for="Login">Nom d'utilisateur : </label> <input id="Login" maxlength="20" type="text" name="Login" /> </p>
    <p> <label for="Password">Mot de passe : </label> <input id="Password" type="password" maxlength="20" name="Password" /></p>
	<button type="submit" name="Connecter" >Connexion</button><br><br>
  <button type="button" name="Inscrire" onclick="window.location.href = 'log.php?action=inscription';" >S'inscrire</button><br><br><br><br><br><br><br><br><br><br><br><br>


	</form>

<?php require('../header_footer/footer.php'); ?>

</body>
