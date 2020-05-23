<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    
    <link href="../public/css/crra.css" rel="stylesheet">
    <script type='text/javascript' src="../public/js/crra.js"></script>
     <script type='text/javascript' src='../public/js/chat.js'></script>
    <?php $load="onload='initChat(); start();'"; 
    ?>
    <title>CRRA</title>
  </head>

  <header>
    <?php require_once("../controller/crraController.php"); 
    require_once("header.php"); ?>
  </header>

  <body <?php echo $load; ?> >
    <div class="menu">

      <?php 
        if ($_SESSION['login'] == 'Gamemaster'){
            require_once("menu.php"); $menu=affiche_menu(); echo $menu; 
          }
        else{
          echo "<h1 id='titreVue'>Bienvenue sur la vue du CRRA</h1>";
        }
      ?>
    </div>

    <section> 
      <article>
        <div id="Victimes">
          <table>
            <tr>
              <td>Sinus</td>
              <td>Etat</td>
              <td>Sexe</td>
              <td>Age</td>
            </tr>
            <?php TableauxVictimes(); ?>
          </table>
        </div>
        <br/>

        <div id="hopitaux">
          <table>
            <tr>
              <td>Nom</td>
              <td>Lits Disponibles</td>
              <td>Distance</td>
            </tr>
            <?php TableauxHopital(); ?>
          </table>
        </div>
        <br/>

        <div id="ambulance">
          <table>
            <tr>
              <td>Nom</td>
              <td>Disponibilité</td>
            </tr>
            <?php tableauxAmbulance(); ?>
          </table>
        </div>
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
  </body>
</html>
