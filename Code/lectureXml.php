<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" http-equiv="refresh" content="5">
    <title>Lecture XML</title>
  </head>
  <body>
    <?php
      $config=simplexml_load_file('config.xml');
      echo "qteGendarme : ".$config->gendarmerie->qteGendarme;
      ?>
  </body>
</html>
