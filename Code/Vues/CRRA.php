<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>CRRA</title>
  </head>

  <header>
    <?php require("../Controller/InitController.php"); ?>
    <?php require("../Controller/CRRAController.php"); ?>
  </header>

  <body>

    <section id="Victimes">
      <table>
        <tr>
          <td>Sinus</td>
          <td>Etat</td>
          <td>Sexe</td>
          <td>Age</td>
        </tr>
        <?php TableauxVictimes(); ?>
      </table>
    </section>
    <br/>

    <section id="hopitaux">
      <table>
        <tr>
          <td>Nom</td>
          <td>Lits Disponibles</td>
          <td>Distance</td>
        </tr>
        <?php TableauxHopital(); ?>
      </table>
    </section>
    <br/>

    <section id="ambulance">
      <table>
        <tr>
          <td>Nom</td>
          <td>Disponibilité</td>
        </tr>
        <?php tableauxAmbulance(); ?>
      </table>
    </section>
  </body>
</html>
