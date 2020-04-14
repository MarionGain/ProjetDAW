<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="../styles/Inscription.css">
    <title>Connexion Reussite</title>
  </head>
  <body>
      <?php
      require('../header_footer/header.php');
echo $erreur;
         ?>

         <h1>Veuillez réessayer</h1>
         <p style='text-align:center'>Try Again !</p>

         <div>
             <p class="bouton_de_navigation"> <a href="/projet/CONTROLEUR/log.php?action=connexion">CONNEXION</a>  </p>
         </div>

    <?php
      require('../header_footer/footer.php');
    ?>
  </body>
</html>
