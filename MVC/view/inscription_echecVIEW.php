<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="../public/css/inscription.css">
    <!-- <link type="text/css" rel="stylesheet" href="../styles/header_footer.css"> -->
    <title>Traitement inscription</title>
  </head>
  <body>
    <header>
       <?php require_once('./header.php');?>
    </header>
    <h1>Echec de l'inscription, votre login est déja existant ou l'email renseigné est déja utilisée</h1>
    
    <section> 
    <div class="center">
      <button type="button" name="Inscrire" class="bouton" onclick="window.location.href = './log.php?action=inscription';" >Retour</button>
    </div>
  </section>
    <footer id="footer">
      <?php  require_once('./footer.php');?>
    </footer>
  </body>
</html>
