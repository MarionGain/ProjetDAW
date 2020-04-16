<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="styles/header_footer.css">
    <link type="text/css" rel="stylesheet" href="styles/acceuil.css">

    <title>Page page page</title>
  </head>
  <body>

          <?php require('header_footer/header.php'); ?>

      <?php
      if( isset(  $_SESSION['Login']  ) )
        {
          echo   "<p style='text-align:center' >Bienvenue ".$_SESSION['Login']." !";
         ?>
          <button type="button" name="Inscrire" onclick="window.location.href = '/projet/VUE/AttenteJoueur.php';">AttenteJoueur.php</button>
          <button type="button" name="scenario" onclick="window.location.href = '/projet/VUE/Scenario.php';">Scenario.php</button>
        <?php
        }
      ?>
    </p>

    <nav>
      <?php require_once("CONTROLEUR/pagechat.php"); ?>
    </nav>

      <?php require('header_footer/footer.php'); ?>

  </body>
</html>
