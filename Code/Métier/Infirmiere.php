<?php
require_once("Personnage.php");
class Infirmiere extends Personnage
{
  function __construct() {
        parent::__construct(); //appel du constructeur de Personnage car Infirmiere descends de Personnage
        //print "Constructeur d'Infirmiere\n";
    }

  function __destruct() {
        //print "Destruction de " . __CLASS__ . "\n";
    }

  public function __set($property, $value) {
        parent::__set($property,$value); //appel du set de Personnage car Infirmière descends de Personnage
    }

  public function __get($property) {
        parent::__get($property); //appel du get de Personnage car Infirmière descends de Personnage
    }

  public function AiderMedecin($victime){
    if ($victime->$etat == $victime->$etatsPossible[1]){ // on regarde quel est l'état de la victime si c'est Léger
        $medecin->$estAidé += 1 ; //on attribut au médécin une aide en plus
    }elseif ($victime->$etat == $victime->$etatsPossible[2]){// on regarde quel est l'état de la victime si c'est Grave
        $medecin->$estAidé += 1 ; //on attribut au médécin une aide en plus
      }
  }

}
?>
