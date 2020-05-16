<?php
if(!isset($_SESSION)){
    session_start();
}
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <link href="../public/css/vues.css" rel="stylesheet">
    <script src = "http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <?php if($_SESSION['login'] != 'Gamemaster')
          echo "<script type='text/javascript' src='../public/js/COS.js'></script>";
    ?>
    <meta charset="utf-8">
    <title>COS</title>
  </head>

  <body <?php if($_SESSION['login'] != 'Gamemaster') {
                echo "onload='initCOS(); initMap();'";
          }
        ?>
  >
    <div class="page">

    <header>
      <?php require("header.php"); ?>
    </header>

    <div class="menu">


      <?php 
      if ($_SESSION['login'] == 'Gamemaster'){
          require("menu.php"); $menu=affiche_menu(); echo $menu; 
        }
      else{
        echo "<h1 id='titreVue'>Bienvenue sur la vue du COS</h1>";
      }
      ?>
    </div>

    <section id="section">

      <aside class="tableau">
        <?php
          require("tableau.php");
        ?>
        <img src="../public/icones/morgue.png" id="morgue"/>
      </aside>

      <article>
        
        <?php 
          require("map.php");
          echo $map;
        ?>
      </article>

      <aside>
        <?php
          require("chat.php");
          echo $tableau;
          echo $chat;
        ?>
      </aside>

    </section>

    <footer>
      <?php require("footer.php"); ?>
    </footer>
  </div>
  </body>
   <?php
      if ($_SESSION['login'] != 'Gamemaster'){
       echo  "<script type='text/javascript' src='../public/js/drag.js'></script>";
      }
      ?>
</html>
 