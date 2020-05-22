<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">

    <script type="text/javascript" src="../public/js/trieur.js"></script>
    <?php require("../Controller/TrieurController.php"); ?>
    <?php AjouteVictime(); ?>
    <title>Patient</title>
  </head>

  <body onload="startP()">
    <h1>Description du patient</h1>
    <div class="description">
      <p>
        <?php AfficheVictime(); ?>
      </p>
      <form action="../Controller/TrieurController.php" method="post">
        <select id="listeEtats" name="Etat">
          <option>État du patient</option>
          <option value="grave">Grave</option>
          <option value="leger">Léger</option>
          <option value="psy">Psychologique</option>
          <option value="mort">Mort</option>
        </select>
        <p id="bouton">
        <input type="submit" name="valider" value="Envoyer au PMA">
      </p>
      </form>
    </div>

  </body>
</html>
