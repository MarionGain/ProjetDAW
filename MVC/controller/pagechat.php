

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Chat</title>
  </head>
  <body>

          <?php
                require('../model/dbchat.php');
          ?>




      <?php
      if( isset(  $_SESSION['login']  ) )
        {
          echo   "<p style='text-align:center' >Bienvenue ".$_SESSION['login']." !";
        }
      ?>
  </p>


  <section>

    <form method="post" action="">
      <div class="div_messages">
        <?php

              if( isset( $_POST['message'] ) && $_POST['message']!='' )
              {
                ajout_individuel($_SESSION['login'], $_POST['destinataire'], $_POST['message']);
              }

              $res = requete_and_return("SELECT EXPEDITEUR, DESTINATAIRE, MESSAGE, COULEUR FROM chat_individuel");
              while($data = $res->fetch())
              {

                if($data['EXPEDITEUR']== $_SESSION['login'] || ($_SESSION['login'] == $data['DESTINATAIRE'])){
                    if($data['EXPEDITEUR']== $_SESSION['login'])
                      $expediteur = "Vous" ;
                    else
                      $expediteur =  $data['EXPEDITEUR'] ;

                    if($data['DESTINATAIRE']== $_SESSION['Login'])
                        $destinataire = "Vous" ;
                    else
                      $destinataire =  $data['DESTINATAIRE'] ;
                    ?>
                    <p> <?php echo "<strong>".$expediteur." à ".$destinataire." </strong>  : ".$data['MESSAGE']; ?> </p>
                    <?php
                  }
                }
              ?>
      </div>

      <p>
        <label for="message"> Message </label>
      </br>
        <input id="Message" type="text" name="message" placeholder="Message"/>
        </br>
        <input id="destinataire" type="text" name="destinataire" placeholder="Destinataire" />
      </p>
      <p>
        <div class="center">
          <input class="button" type="submit" name="Valider" value="Envoyer !" />

        </div>
      </p>
    </form>
  </section>


  </body>
</html>
