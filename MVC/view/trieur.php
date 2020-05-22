<!DOCTYPE html>
<html lang="fr">
  <head>
    <link href="../public/css/trieur.css" rel="stylesheet">
    <meta charset="utf-8">
    <title>Page</title>
    <script type="text/javascript" src="../public/js/trieur.js"></script>
    <?php require_once("../controller/trieurController.php"); ?>
  </head>

  <body onload="start()">

    <div class="page">

    <!-- En-tête -->
    <header>
      <?php require_once("header.php"); ?>
    </header>

    <div class="menu">

      <?php require_once("menu.php"); $menu=affiche_menu(); echo $menu; ?>
    </div>

    <section id="section">
      <aside class="tableau">
        <?php
          require_once("tableau.php");
        ?>
      </aside>

      <article>
        <img src="../public/images/brancard.png" alt="brancard" id="brancardDroite"/>
        <img src="../public/images/brancard.png" alt="brancard" id="brancardGauche"/>
      </article>

      <aside>
        <?php
          require_once("chat.php");
          echo $tableau;
          echo $chat;
        ?>
      </aside>

    </section>

    <footer>
      <?php require_once("footer.php"); ?>
    </footer>
  </div>
  </body>
</html>
