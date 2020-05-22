<!DOCTYPE html>
<html lang="fr">
  <head>
    <link href="../public/css/pma.css" rel="stylesheet">
    <meta charset="utf-8">
    <title>pma</title>
    <script src ="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="../public/js/pma.js"></script>
    <?php require("../Controller/PMAController.php"); ?>
  </head>

  <body onload="start()">

    <div class="menu">

      <?php require("menu.php"); $menu=affiche_menu(); echo $menu; ?>
    </div>
    <div class="page">
    <section id="section">
      <h1>PMA</h1>
      <article class="pma">
        <div class="graves">
          <p>
            <table>
              <tr>
                <td><img src="../public/images/brancard.png" alt="patient" id="patientgrave1"class="patientgrave"/></td>
                <td><img src="../public/images/brancard.png" alt="patient" id="patientgrave2"class="patientgrave"/></td>
                <td><img src="../public/images/brancard.png" alt="patient" id="patientgrave3"class="patientgrave"/></td>
                <td><img src="../public/images/brancard.png" alt="patient" id="patientgrave4"class="patientgrave"/></td>
                <td><img src="../public/images/brancard.png" alt="patient" id="patientgrave5"class="patientgrave"/></td>
                <td><img src="../public/images/brancard.png" alt="patient" id="patientgrave6"class="patientgrave"/></td>
                <td><img src="../public/images/brancard.png" alt="patient" id="patientgrave7"class="patientgrave"/></td>
                <td><img src="../public/images/brancard.png" alt="patient" id="patientgrave8"class="patientgrave"/></td>
              </tr>
            </table>
          </p>
        </div>

        <div class="bas">
          <div class="legers">
            <p>
             <table>
                <tr>
                  <td><img src="../public/images/brancard.png" alt="patient" id="patientleger1"class="patientleger"/></td>
                  <td><img src="../public/images/brancard.png" alt="patient" id="patientleger2"class="patientleger"/></td>
                  <td><img src="../public/images/brancard.png" alt="patient" id="patientleger3"class="patientleger"/></td>
                  <td><img src="../public/images/brancard.png" alt="patient" id="patientleger4"class="patientleger"/></td>
                  <td><img src="../public/images/brancard.png" alt="patient" id="patientleger5"class="patientleger"/></td>
                  <td><img src="../public/images/brancard.png" alt="patient" id="patientleger6"class="patientleger"/></td>
                  <td><img src="../public/images/brancard.png" alt="patient" id="patientleger7"class="patientleger"/></td>
                  <td><img src="../public/images/brancard.png" alt="patient" id="patientleger8"class="patientleger"/></td>
                </tr>
              </table>
            </p>
          </div>
        </div>
      </article>
    </section>
  </div>
  </body>
</html>
