<?php
session_start();
$_SESSION['Login'] = $_POST['Login'];
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
      require('../header_footer/header.php');
         ?>

    <h1  >Bravo ! vous êtes connecté !</h1>
      <p style="text-align:center">votre login de session est : <?php echo $_SESSION['Login']; ?></p>
    <h1>
      <a href="../page.php">GO !!!!</a>
    </h1>
    <?php
      require('../header_footer/footer.php');
    ?>
  </body>
</html>
