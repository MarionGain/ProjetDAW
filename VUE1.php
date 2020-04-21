<!DOCTYPE html>
<html lang="fr">
  <head>

    <script src = "http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href="style.css" rel="stylesheet">
	<link href="tableau.css" rel="stylesheet">
    <meta charset="utf-8">
    <title></title>
  </head>
  <header>
    <?php require("header.php"); ?>
  </header>
  <body>
  <div id=carte>
  <?php require("menu.php"); $menu=affiche_menu(); echo $menu;
  require("map.php");
  echo $map;
  ?>
  </div>
  <nav id=tab>
	<?php require("tableau.php"); ?>
  </nav>
  </body>
  <footer>
    <?php require("footer.php"); ?>
  </footer>
  <script src="Drag.js"></script>
</html>
