<?php
require('../model/db.php');

if( isset($_POST['login']) )
{
  if( $_POST['login']!='' && $_POST['password']!='' && $_POST['mail']!='' )
    {
      $login = htmlspecialchars($_POST['login']);
      $mdp = sha1(htmlspecialchars($_POST['password']));
      $mail = htmlspecialchars($_POST['mail']);

      if(existe($login , $mail)==0 ) // verifie si le user est déjà créé --- si 0 -> n'existe pas sinon 1 -> existe déjà
        {
          //echo "Ajout de : ".$login." ".$mdp." ".$mail;
          ajout($login, $mdp, $mail);
          require('../view/inscription_reussiteVIEW.php');
        }
        else
          require('../view/inscription_echecVIEW.php');
    }

  else echo "CHAMPS VIDE";
}

 ?>
