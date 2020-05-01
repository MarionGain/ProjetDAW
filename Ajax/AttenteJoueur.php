<?php session_start(); ?>
<html lang="en" dir="ltr">
  <head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script  type="text/javascript" src="../Script/AttenteJoueur.js"></script>
    <link href="../styles/acceuil.css" rel="stylesheet">
    <link href="../styles/tableau.css" rel="stylesheet">
    <meta charset="utf-8">
    <title>En attente</title>
  </head>
  <body onload="onload()">
    <header>
      <?php
        require_once('../header_footer/header.php');
      ?>
    </header>
    <nav id="tableau">
    </nav>
    <nav id="chat">
      <?php
    //  require_once('chat.php');
      ?>
    </nav>
    <footer>
      <?php
        require_once('../header_footer/footer.php');
      ?>
    </footer>
  </body>

</html>
