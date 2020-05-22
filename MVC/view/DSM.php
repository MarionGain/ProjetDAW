<!DOCTYPE html>
<html lang="fr">
  <head>
    <link href="../public/css/vues.css" rel="stylesheet">
    <meta charset="utf-8">
    <script type="text/javascript" src="../public/js/map.js" ></script>
    <script type="text/javascript" src="../public/js/chat.js" ></script>
    <title>Page</title>
       <?php $load="onload='initMap(); initChat(); test(); start();'"; 
        
    ?>
  </head>

  <body <?php echo $load; ?> >
    <div class="page">

    <!-- En-tête -->
    <header>
      <?php require_once("header.php"); ?>
    </header>

    <div class="menu">

      <?php require_once("menu.php"); $menu=affiche_menu(); echo $menu; ?>
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

    <footer>
      <?php require_once("footer.php"); ?>
    </footer>
  </div>
  </body>
</html>
