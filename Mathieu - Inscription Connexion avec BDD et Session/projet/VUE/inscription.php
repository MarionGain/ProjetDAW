<!DOCTYPE html>
<html  dir="ltr" lang="fr" xml:lang="fr">
<head>
   <link type="text/css" rel="stylesheet" href="../styles/inscription.css">
   <link type="text/css" rel="stylesheet" href="../styles/header_footer.css">
	<title>Page d'inscription</title>

<?php require('../header_footer/header.php'); ?>

</head>

<body>
	<form method="post" action="../CONTROLEUR/inscrire.php">
  	<p> <label for="Login">Nom d'utilisateur : </label> <input id="Login" maxlength="20" type="text" name="Login" /> </p>
  	<p> <label for="Password">Mot de passe : </label> <input id="Password" type="password" maxlength="20" name="Password" /></p>
    <p>Email : <input id="Mail" type="text" name="Mail" /> </p>
    <input id ="submit" type="submit" name="Valider" value="Valider !"/><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

  </form>
<?php require('../header_footer/footer.php'); ?>

</body>
