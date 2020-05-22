<!DOCTYPE html>
<html lang="fr">
  <head>
    <link href="../public/css/vues.css" rel="stylesheet">
    <script src = "http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <meta charset="utf-8">
    <title>Page</title>
  </head>

  <body  onload="init()">
    <div class="page">

    <!-- En-tête -->
    <header>
      <?php require("../Controller/InitController.php"); ?>
      <?php require("../Controller/DSMController.php"); ?>
      <?php require("header.php"); ?>
    </header>

    <div class="menu">

      <?php require("menu.php"); $menu=affiche_menu(); echo $menu; ?>
    </div>

    <section id="section">

      <aside class="tableau">
        <?php
          require_once("tableau.php");
        ?>
        <img src="../public/icones/morgue.png" id="morgue"/>
      </aside>

      <article>

        <?php
          require_once("map.php");
          echo $map;
        ?>
      </article>

      <aside>
        <?php
          require_once("chat.php");
          echo $tableau;
          echo $chat;
        ?>
      </aside>

    </section>

    <footer id="footer">
      <?php require("footer.php"); ?>
    </footer>
  </div>
  </body>
  <script src="../public/js/vue.js"></script>
  <script src="../public/js/drag.js"></script>
  <script src="../public/js/map.js"></script>
</html>