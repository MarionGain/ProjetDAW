<!DOCTYPE html>
<html  dir="ltr" lang="fr" xml:lang="fr">
  <head>
    <meta charset="utf-8" />
    <link type="text/css" href="../public/css/inscription.css" rel="stylesheet">
    <script type="text/javascript" src="../public/js/script_inscription_connexion.js"></script>
    <title>Inscription</title>
  </head>

  <body>
    <div id="page">
    <header> <?php require_once("header.php");?></header>
    <h1>Vous n'êtes pas encore inscrit ? </h1>

    <section> 

      <form method="post" onsubmit="return verifie_champs_inscription()" action="../controller/inscrire.php">
        <p>
          <label for="login">Nom d'utilisateur : </label>
        </br>
          <input id="login" type="text" name="login" onblur="verifLogin()" /> 
        </p>
         <p id="MessageErreurLogin" class="MessageErreur"> <br/></p>
        <p>
          <label for="password">Mot de passe : </label></br>
          <input id="password" type="password" name="password" onblur="verifPassword()"/>
        </p>
          
            <p id="MessageErreurPassword" class="MessageErreur"> <br/></p>

        <p>
          <label for="email">Email : </label>  </br>
          <input id="mail" type="email" name="mail" onblur="verifMail()"/>
        </p>
        <p id="MessageErreurMail" class="MessageErreur"> <br/></p>
        <p>
          <div class="center">
            <input class="button" type="submit" name="Valider" value="S'inscrire"/>
          </div>
        </p>
      </form>
    </section>
    
    <footer>
      <?php require_once("footer.php"); ?>
    </footer>
  </div>
  </body>
</html>
