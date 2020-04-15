<!DOCTYPE html>
<html  dir="ltr" lang="fr" xml:lang="fr">
  <head>
    <meta charset="utf-8" />
    <link type="text/css" rel="stylesheet" href="Inscription.css">
    <title>Inscription</title>
  </head>

  <body>
    <header> <?php require_once("header.php");?></header>
    <h1>Vous n'êtes pas encore inscrit ? </h1>

    <section> 

      <form method="post" action="inscription.php">
        <p>
          <label for="login">Nom d'utilisateur : </label>
        </br>
          <input id="login" type="text" name="login" /> 
        </p>

        <p>
          <label for="password">Mot de passe : </label>  </br>
          <input id="password" type="password" name="password" />
        </p>

        <p>
          <label for="email">Email : </label>  </br>
          <input id="mail" type="email" name="mail" />
        </p>

        <p>
          <div class="center">
            <input class="button" type="button" name="Valider" value="S'inscrire"/>
          </div>
        </p>
      </form>
    </section>
    
    <footer>
      <?php require_once("footer.php"); ?>
    </footer>
  </body>
</html>
