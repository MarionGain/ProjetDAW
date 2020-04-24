<?php
require("Personnage.php");

abstract class Soigneur extends Personnage {
  abstract protected function SoignerVictimes();
  function __construct() {
        parent::__construct(); //appel du contructeur de Personnage car Soigneur descends de Personnage
        print "Constructeur de Soigneur\n";
    }

    function __destruct() {
          print "Destruction de " . __CLASS__ . "\n";
      }

    public function __set($property, $value) {
          parent::__set($property,$value); //appel du set de Personnage car Soigneur descends de Personnage
      }

    public function __get($property) {
          parent::__get($property); //appel du get de Personnage car Soigneur descends de Personnage
      }
}
 ?>
