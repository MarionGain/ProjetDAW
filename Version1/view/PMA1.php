<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>PMA</title>
    <script src ="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="../public/js/pma.js"></script>
  </head>

  <header>
    <?php require("../Controller/PMAController.php"); ?>
  </header>

  <body onload="start()">
    <div class="menu">
      <?php require("menu.php"); $menu=affiche_menu(); echo $menu; ?>
    </div>

    <section id="Victimes">
      <table id="tableau">
        <tr>
          <td>Sinus</td>
          <td>Etat</td>
          <td>Position</td>
          <td>Sexe</td>
          <td>Age</td>
        </tr>
        <?php TableauxVictimes(); ?>
      </table>
    </section>
    <br/>
  </body>


</html>
