<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link href="../public/css/evac.css" rel="stylesheet">
    <script type='text/javascript' src='../public/js/chat.js'></script>
    <?php $load="onload='initChat(); start();'"; 
    ?>
    <title>EVAC</title>

  </head>

  <header>
    <?php require_once("../controller/evacController.php");
      require_once("header.php"); ?>
  </header>

  <body <?php echo $load ?>>
    <div class="menu">
      <?php 
        if ($_SESSION['login'] == 'Gamemaster'){
            require_once("menu.php"); $menu=affiche_menu(); echo $menu; 
          }
        else{
          echo "<h1 id='titreVue'>Bienvenue sur la vue du Evac</h1>";
        }
      ?>
    </div>

  <section>
    <article>
      <form method="post" action="evacForm.php" id="form">
    
      <div id="Victimes">
        <table>
          <tr>
            <td>Sinus</td>
            <td>Etat</td>
            <td>Position</td>
            <td>Sexe</td>
            <td>Age</td>
            <td>Selectionner</td>
          </tr>
          <?php TableauxVictimesEvac(); ?>
        </table>
      </div>
      <br/>

      <div id="hopitaux">
        <table>
          <tr>
            <td>Nom</td>
            <td>Lits Disponibles</td>
            <td>Distance</td>
            <td>Selectionner</td>
          </tr>
          <?php TableauxHopitalEvac(); ?>
        </table>
      </div>
      <br/>

      <div id="ambulance">
        <table>
          <tr>
            <td>Nom</td>
            <td>Disponibilité</td>
            <td>Selectionner</td>
          </tr>
          <?php tableauxAmbulanceEvac(); ?>
        </table>
      </div>
      <br/>
      <div id="Envoyer" >
      <input type="submit" value="Envoyer" >
    </div>
    </form>
  </article>
   <aside>
        <?php
          require_once("chat.php");
          echo $tableau;
          echo $chat;
        ?>
      </aside>

  </section>
  <footer>
      <?php require_once("footer.php"); ?>
  </footer>
  <script src ="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script type="text/javascript" src="../public/js/evac.js"></script>
  </body>
</html>
