<?php
session_start();
$_SESSION['login'] = $_POST['login'];
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="../styles/Inscription.css">
    <title>Connexion Reussite</title>
  </head>
  <body>

      <?php
      require('header.php');
         ?>

    <h1  >Bravo ! vous êtes connecté !</h1>
      <p style="text-align:center">votre login de session est : <?php echo $_SESSION['login']; ?></p>
    <h1>
      <?php
        if ($_SESSION['login'] == 'Gamemaster'){
          echo '<a href="../view/AttributionRole.php">GO !!!!</a>';
        }
        else {
          echo '<a href="../view/AttenteJoueur.php">GO !!!!</a>';        }
       ?>
    </h1>
    <?php
      require('footer.php');
    ?>
  </body>
</html>
