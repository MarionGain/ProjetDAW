<?php  require('../MODELE/db.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="/projet/styles/acceuil.css">
    <link type="text/css" rel="stylesheet" href="../styles/inscription.css">
    <link type="text/css" rel="stylesheet" href="../styles/header_footer.css">
    <title>Connexion</title>
  </head>
  <body>
    <?php


if( isset($_POST['Login']) &&  isset($_POST['Password']))
{
  if( $_POST['Login']!='' && $_POST['Password']!='' )
    {
      $login = htmlspecialchars($_POST['Login']);
      $mdp = htmlspecialchars($_POST['Password']);

      if( existe($login) == 1 )  // verifie si le user est déjà créé --- si 0 -> n'existe pas sinon 1 -> existe déjà
        {
          //echo "Ajout de : ".$login." ".$mdp." ".$mail;
        if(verif_login_password( $login , $mdp ) == 1)

          {
            require('../VUE/connexion_reussiteVIEW.php');
          }
          else
            {
              echo "<p style='text-align:center' ; color: red >Type d'erreur : MAUVAIS LOGIN OU MDP</p>";
              require('../VUE/connexion_echecVIEW.php');
            }
        }
        else
        {
          require('../VUE/connexion_echecVIEW.php');
            echo "<br/><p style='text-align:center ; color: red'>Type d'erreur : PAS DE LOGIN</p>";
        }
    }

  else echo "CHAMPS VIDE";
}
  require('../header_footer/footer.php');
     ?>
   </body>
 </html>
