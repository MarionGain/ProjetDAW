<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="../styles/inscription.css">
    <link type="text/css" rel="stylesheet" href="../styles/header_footer.css">
    <title>Traitement inscription</title>
  </head>
  <body>
    <?php
      require('../header_footer/header.php');
      ?>

<h1>Inscription réussite !</h1>
<p>Pour vous connecter suivez ce lien :</p>
<button type="button" name="Inscrire" class="centre" onclick="window.location.href = 'log.php?action=connexion';" >Coooonnexion</button>


    <?php  require('../header_footer/footer.php');
    ?>
  </body>
</html>
