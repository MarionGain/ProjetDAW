<?php
require('../MODELE/db.php');

if( isset($_POST['Login']) )
{
  if( $_POST['Login']!='' && $_POST['Password']!='' && $_POST['Mail']!='' )
    {
      $login = htmlspecialchars($_POST['Login']);
      $mdp = sha1(htmlspecialchars($_POST['Password']));
      $mail = htmlspecialchars($_POST['Mail']);

      if(existe($login , $mail)==0 ) // verifie si le user est déjà créé --- si 0 -> n'existe pas sinon 1 -> existe déjà
        {
          //echo "Ajout de : ".$login." ".$mdp." ".$mail;
          ajout( $login , $mdp , $mail );
          require('../VUE/inscription_reussiteVIEW.php');
        }
        else
          require('../VUE/inscription_echecVIEW.php');
    }

  else echo "CHAMPS VIDE";
}

 ?>
