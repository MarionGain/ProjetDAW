<!DOCTYPE html>
<html  dir="ltr" lang="fr" xml:lang="fr">
  <head>
    <meta charset="utf-8" />
    <script type="text/javascript" src="/projet/JS/script_inscription_connexion.js"></script>
    <link type="text/css" rel="stylesheet" href="../styles/Inscription.css">

    <title>Inscription</title>
  </head>

  <body>
    <?php require_once("../header_footer/header.php");
    ?>

    <h1>Vous n'êtes pas encore inscrit ? </h1>

    <section>

      <form method="post" onsubmit="return verifie_champs_inscription()" action="../CONTROLEUR/inscrire.php">
        <p>
          <label for="Login">Nom d'utilisateur : </label>
        </br>
          <input id="Login" type="text" name="Login" onblur="verifLogin()" />
        </p>
        <p id="MessageErreurLogin" class="MessageErreur"> <br/></p>

        <p>
          <label for="Password">Mot de passe : </label>  </br>
          <input id="Password" type="password" name="Password" onblur="verifPassword()" />
        </p>
            <p id="MessageErreurPassword" class="MessageErreur"> <br/></p>

        <p>
          <label for="Mail">Email : </label>  </br>
          <input id="Mail" type="email" name="Mail" onblur="verifMail()" />
        </p>
            <p id="MessageErreurMail" class="MessageErreur"> <br/></p>

        <p>
          <div class="center">
            <input class="button" type="submit" name="Valider" value="S'inscrire"/>
          </div>
        </p>
      </form>
    </section>


      <?php require_once("../header_footer/footer.php"); ?>

  </body>
</html>
