<?php
require("Soigneur.php");
class Medecin extends Soigneur
{

$estAidé=0;

  function __construct() {
        parent::__construct(); //appel du constructeur de Soigneur car Medecin descends de Soigneur
        print "Constructeur de Medecin\n";
    }

  function __destruct() {
        print "Destruction de " . __CLASS__ . "\n";
    }

  public function __set($property, $value) {
        parent::__set($property,$value); //appel du set de Soigneur car Medecin descends de Soigneur
    }

  public function __get($property) {
        parent::__get($property); //appel du get de Soigneur car Medecin descends de Soigneur
    }

  public function SoignerVictimes(){
    if ($victim->$etat = "Grave" ){
      //placement sur la carte du médecin vers les victimes grave
      Guérir();
       $victim->$pris_en_charge=true;
    }elseif($victim->$etat = "Léger"){
      //placement sur la carte du médecin vers les victimes légères
      Guérir();
       $victim->$pris_en_charge=true;
    }
  }
}
?>
