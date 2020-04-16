

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="./styles/header_footer.css">
    <link type="text/css" rel="stylesheet" href="./styles/pagechat.css">

    <title>Chat</title>
  </head>
  <body>

          <?php
                require('./MODELE/dbchat.php');
          ?>




      <?php
      if( isset(  $_SESSION['Login']  ) )
        {
          echo   "<p style='text-align:center' >Bienvenue ".$_SESSION['Login']." !";
        }
      ?>
  </p>


  <section>

    <form method="post" action="">
      <div class="div_messages">
        <?php

              if( isset( $_POST['message'] ) && $_POST['message']!='' )
              {
                ajout( $_SESSION['Login'] , $_POST['message'] );
              }

              $res = requete_and_return("SELECT LOGIN , MESSAGE , COULEUR FROM chat");
              while($data = $res->fetch())
              {

                if($data['LOGIN']== $_SESSION['Login'])
                    $login = "Vous" ;
                   else
                    $login =  $data['LOGIN'] ;
                ?>
                <p> <?php echo "<strong style='color:".$data['COULEUR']."'>".$login."</strong> : ".$data['MESSAGE']; ?> </p>
                <?php
              }

         ?>
      </div>

      <p>
        <label for="message"> Message </label>
      </br>
        <input id="Message" type="text" name="message" />
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
