<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>CRRA</title>
    <script src="../public/js/crra.js"></script>
  </head>

  <header>
    <?php require("../Controller/CRRAController.php"); ?>
  </header>

  <body onload="start()">
    <div class="menu">

      <?php require("menu.php"); $menu=affiche_menu(); echo $menu; ?>
    </div>

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
