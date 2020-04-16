<!DOCTYPE html>
<html lang="fr">
  <head>
    <link href="style.css" rel="stylesheet">
	<link href="tableau.css" rel="stylesheet">
    <meta charset="utf-8">
    <title></title>
    <script src="Drag.js"></script>
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
</html>
