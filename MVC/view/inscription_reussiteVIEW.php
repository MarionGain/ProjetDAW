s<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="../public/css/inscription.css">
    <!-- <link type="text/css" rel="stylesheet" href="../styles/header_footer.css"> -->
    <title>Traitement inscription</title>
  </head>
  <body>
      <header>
       <?php require_once('header.php');?>
      </header>

      <h1>Inscription réussite !</h1>
      <section class="center">
      <p>Pour vous connecter suivez ce lien :</p>
      <button type="button" name="Inscrire" class="centre" onclick="window.location.href = 'log.php?action=connexion';" >Connexion</button>
       </section>
      <footer id="footer">
        <?php  require_once('footer.php');?>
      </footer>
  </body>
</html>
