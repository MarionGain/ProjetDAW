<?php
  if(!isset($_SESSION)){
      session_start();
  }
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <link href="../public/css/vues.css" rel="stylesheet">
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- <script type="text/javascript" src="../public/js/map.js" ></script> -->
    <script type="text/javascript" src="../public/js/chat.js" ></script>
     <?php if($_SESSION['login'] != 'Gamemaster')
          echo "<script type='text/javascript' src='../public/js/dsm.js'></script>";
    ?>
    <title>DSM</title>
     <?php $load="onload='initMap(); initChat();"; 
          if($_SESSION['login'] != 'Gamemaster') { 
            $load.="initDSM();'";
          }
          else{
            $load .= "'";
          }
    ?>
  </head>

  <body <?php echo $load; ?> >
    <div class="page">

    <!-- En-tête -->
    <header>
      <?php require_once("../controller/dsmController.php");
            require_once("header.php"); 
      ?>
    </header>

    <div class="menu">

     <?php 
        if ($_SESSION['login'] == 'Gamemaster'){
            require_once("menu.php"); $menu=affiche_menu(); echo $menu; 
          }
        else{
          echo "<h1 id='titreVue'>Bienvenue sur la vue du DSM</h1>";
        }
      ?>
    </div>

    <section id="section">
      <aside>
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

    <footer>
      <?php require_once("footer.php"); ?>
    </footer>
  </div>
   <?php
      if ($_SESSION['login'] != 'Gamemaster'){
       echo  "<script type='text/javascript' src='../public/js/drag.js'></script>";
      }
  ?>
  </body>
</html>
