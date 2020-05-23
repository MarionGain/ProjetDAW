<?php
  if(!isset($_SESSION)){
      session_start();
  }
?>

<html lang="en" dir="ltr">
  <head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script  type="text/javascript" src="../public/js/attenteJoueur.js"></script>
    <link href="../public/css/attributionRole.css" rel="stylesheet">
    <meta charset="utf-8">
    <title>En attente</title>
  </head>
  <body onload="onload()">
    <header>
      <?php
        require_once('../view/header.php');
      ?>
    </header>
    <section>

      <div id="tableau">
      </div>
      <div id="chat">
        <?php
      //  require_once('chat.php');
        ?>
      </div>
    </section>
    <footer id="footer">
      <?php
        require_once('../view/footer.php');
      ?>
    </footer>
  </body>

</html>
