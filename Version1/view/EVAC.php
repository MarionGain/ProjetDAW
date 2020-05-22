<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>EVAC</title>

  </head>

  <header>
    <?php require("../Controller/EvacController.php"); ?>
  </header>

  <body>
    <div class="menu">

      <?php require("menu.php"); $menu=affiche_menu(); echo $menu; ?>
    </div>

    <form method="post" action="EvacForm.php" id="form">
    <section id="Victimes">
      <table>
        <tr>
          <td>Sinus</td>
          <td>Etat</td>
          <td>Position</td>
          <td>Sexe</td>
          <td>Age</td>
          <td>Selectionner</td>
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
          <td>Selectionner</td>
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
          <td>Selectionner</td>
        </tr>
        <?php tableauxAmbulance(); ?>
      </table>
    </section>
    <br/>
    <div id="Envoyer" >
    <input type="submit" value="Envoyer" >
  </div>
  </form>
  <script src ="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script type="text/javascript" src="../public/js/Evac.js"></script>
  </body>
</html>
