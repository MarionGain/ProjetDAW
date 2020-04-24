<!DOCTYPE html>
<html lang="fr">
  <head>
    <link href="vues.css" rel="stylesheet">
    <meta charset="utf-8">
    <script type="text/javascript" src="map.js" ></script>
    <script type="text/javascript" src="chat.js" ></script>
    <title>Page</title>
  </head>

  <body onload="test()">
    <div class="page">

    <!-- En-tête -->
    <header>
      <?php require("header.php"); ?>
    </header>

    <div class="menu">

      <?php require("menu.php"); $menu=affiche_menu(); echo $menu; ?>
    </div>

    <section id="section">
      <aside>
        <?php
          require_once("tableau.php");
        ?>
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
</html>
