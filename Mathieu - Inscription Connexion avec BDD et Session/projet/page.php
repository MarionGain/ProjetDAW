<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="styles/header_footer.css">

    <title>OKOK</title>
  </head>
  <body>
    <?php require('header_footer/header.php'); ?>
    <p style='text-align:center' >Bienvenue mr. <?php echo $_SESSION['Login']; ?> </p>
      <?php require('header_footer/footer.php'); ?>
  </body>
</html>
