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

<h1>Echec de l'inscription, votre login est déja existant ou l'email renseigné est déja utilisée</h1>
<div class="centre">
  <button type="button" name="Inscrire" class="bouton" onclick="window.location.href = 'log.php?action=inscription';" >Retour</button>
</div>
    <?php  require('../header_footer/footer.php');
    ?>
  </body>
</html>
