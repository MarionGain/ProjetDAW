<!DOCTYPE html>
<html lang="fr">
  <head>
    <link href="trieur.css" rel="stylesheet">
    <meta charset="utf-8">
    <title>Page</title>
    <script type="text/javascript" src="trieur.js"></script>
  </head>

  <body onload="start()">
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
        <img src="Images/brancard.png" alt="brancard" id="brancard1"/>
        <img src="Images/brancard.png" alt="brancard" id="brancard2"/>
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
