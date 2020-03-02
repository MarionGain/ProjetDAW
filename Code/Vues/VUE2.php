<!DOCTYPE html>
<html lang="fr">
  <head>
    <link href="style.css" rel="stylesheet">
    <meta charset="utf-8">
    <title></title>
  </head>
  <header>
    <?php require("header.php"); ?>
  </header>
  <body>
  <?php require("menu.php"); $menu=affiche_menu(); echo $menu;
  require("map.php");
  echo $map; ?>
  </body>
  <footer>
    <?php require("footer.php"); ?>
  </footer>
</html>
