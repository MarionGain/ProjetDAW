<?php
session_start();
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html  dir="ltr" lang="fr" xml:lang="fr">
<head>
   <link type="text/css" rel="stylesheet" href="Inscription.css">
   <link type="text/css" rel="stylesheet" href="styles/header_footer.css">
   <link type="text/css" rel="stylesheet" href="styles/acceuil.css">
	<title>Acceuil</title>
</head>

  <body>
    <?php require('header_footer/header.php'); ?>
    <div class="div_centre">
      <p class="bouton_de_navigation"> <a href="CONTROLEUR/log.php?action=inscription">S'inscrire</a>  </p>
      <p class="bouton_de_navigation"> <a href="CONTROLEUR/log.php?action=connexion">Se connecter</a>  </p>
    </div>
    <?php require('header_footer/footer.php'); ?>

  </body>
</html>
