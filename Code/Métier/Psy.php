<?php
require("Soigneur.php");
class Psy extends Soigneur
{

$estAidé=0;

  function __construct() {
        parent::__construct(); //appel du constructeur de Soigneur car Psy descends de Soigneur
        print "Constructeur de Psy\n";
    }

  function __destruct() {
        print "Destruction de " . __CLASS__ . "\n";
    }

  public function __set($property, $value) {
        parent::__set($property,$value); //appel du set de Soigneur car Psy descends de Soigneur
    }

  public function __get($property) {
        parent::__get($property); //appel du get de Soigneur car Psy descends de Soigneur
    }

    public function SoignerVictimes(){

    }
}

?>
