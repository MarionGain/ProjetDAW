<?php
require("Personnage.php");
class Medecin extends Personnage
{

$estAidé=0;

  function __construct() {
        parent::__construct(); //appel du constructeur de Personnage car Medecin descends de Personnage
        print "Constructeur de Medecin\n";
    }

  function __destruct() {
        print "Destruction de " . __CLASS__ . "\n";
    }

  public function __set($property, $value) {
        parent::__set($property,$value); //appel du set de Personnage car Medecin descends de Personnage
    }

  public function __get($property) {
        parent::__get($property); //appel du get de Personnage car Medecin descends de Personnage
    }

  public function SoignerVictimes(){
    if ($victim->$etat = "Grave" ){
      //placement sur la carte du médecin vers les victimes grave
      Guérir();
       $victim->$etat="Soigné"; 
    }elseif($victim->$etat = "Léger"){
      //placement sur la carte du médecin vers les victimes légères
      Guérir();
       $victim->$etat="Soigné"; 
    }
  }
}

?>
