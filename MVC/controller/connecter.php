<?php  require_once('../model/db.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Connexion</title>
  </head>
  <body>

    <?php
        if( isset($_POST['login']) &&  isset($_POST['password']))
        {
          if( $_POST['login']!='' && $_POST['password']!='' )
            {
              $login = htmlspecialchars($_POST['login']);
              $mdp = sha1(htmlspecialchars($_POST['password']));

              if( existe_login($login) == 1 )  // verifie si le user est déjà créé --- si 0 -> n'existe pas sinon 1 -> existe déjà
                {
                  //echo "Ajout de : ".$login." ".$mdp." ".$mail;
                  if(verif_login_password( $login , $mdp ) == 1)
                  {
                     if($login != "Gamemaster"){
                      connect($login);
                    }
                    
                    session_start();
                    $_SESSION['login'] = $_POST['login'];

                    if($login == "Gamemaster"){
                      require_once('../view/attributionRole.php');
                    }

                    else {
                      require_once('../view/attenteJoueur.php');
                    }
                    // require('../view/connexion_reussiteVIEW.php');
                    require_once('initController.php');
                    
                  }
                  else
                  {
                    $erreur = "<p style='text-align:center'>Type d'erreur :<span style='color: red' > MAUVAIS MOT DE PASSE</span></p>";
                      require_once('../view/connexion_echecVIEW.php');

                  }
                }
                else
                {
                  $erreur = "<br/><p style='text-align:center ; color: red'>Type d'erreur : PAS DE LOGIN</p>";
                  require_once('../view/connexion_echecVIEW.php');
                }
              }
          else echo "CHAMPS VIDE";
        }
    ?>
  </body>
 </html>
