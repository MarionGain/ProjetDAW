<?php
$erreur=0;
//********************* Traitement de la page demandée, via la variable ACTION pour s'inscrire ou se connecter
  if( isset( $_GET['action'] ) )
    {
      switch ( $_GET['action'] )
        {
          case 'inscription':
                          require('../view/inscription.php');
                          break;
          case 'connexion'  :
                          require('../view/connexion.php');
                          break;
          default           :
                          $erreur=1;
                          break;
        }
    }
  else
    {
      $erreur=2;
    }

//********************* Afficher la nature de l'erreur lors du chargement de la page , si $erreur == 0 --> pas d'erreur
if($erreur!=0)
  {
    echo ' <link type="text/css" rel="stylesheet" href="../styles/header_footer.css">';
    echo ' <link type="text/css" rel="stylesheet" href="../styles/erreur.css">';
    require('../view/header.php');

    if($erreur==1)
      {
        echo "<h1 class='erreur_404'> Erreur !  <br/>  La page <span style='color:red'>".$_GET['action']."</span> n'existe pas  </h1>";
        echo "<p id='bouton_retour_accueil'><a style='text-decoration: none' href='../log_in_ou_up.php'>Retourner à l'accueil &gt&gt</a></p>";
      }

    else
      {
        echo "<h1 class='erreur_404'> Erreur ! <br/> La variable ' <span style='color:red'> action </span> ' n'est pas définie ! </h1>";
        echo "<p id='bouton_retour_accueil'><a style='text-decoration: none' href='../log_in_ou_up.php'>Retourner à l'accueil &gt&gt</a></p>";
      }

    require('../view/footer.php');
  }
 ?>
