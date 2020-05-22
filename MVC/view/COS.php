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
    <script type='text/javascript' src='../public/js/chat.js'></script>
    <?php if($_SESSION['login'] != 'Gamemaster')
          echo "<script type='text/javascript' src='../public/js/cos.js'></script>";
    ?>
    <meta charset="utf-8">
    <title>COS</title>
    <?php $load="onload='initMap(); initChat();'"; 
          if($_SESSION['login'] != 'Gamemaster') { 
            $load.="'initCOS();'";
          }
          echo $_SESSION['login'];
    ?>
  </head>

  <body <?php echo $load;?>
          
  >
    <div class="page">

    <header>
      <?php require_once("../controller/initController.php");
            require_once("header.php"); ?>
    </header>

    <div class="menu">


      <?php 
      if ($_SESSION['login'] == 'Gamemaster'){
          require_once("menu.php"); $menu=affiche_menu(); echo $menu; 
        }
      else{
        echo "<h1 id='titreVue'>Bienvenue sur la vue du COS</h1>";
      }
      ?>
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

    <footer>
      <?php require_once("footer.php"); ?>
    </footer>
  </div>
  </body>
   <?php
      if ($_SESSION['login'] != 'Gamemaster'){
       echo  "<script type='text/javascript' src='../public/js/drag.js'></script>";
      }
      ?>
</html>
 