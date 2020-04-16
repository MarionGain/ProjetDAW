<?php
require("Personnage.php");
class Policier extends Personnage
{
  function __construct() {
        parent::__construct(); //appel du constructeur de Personnage car Policier descends de Personnage
        print "Constructeur de Policier\n";
    }

  function __destruct() {
        print "Destruction de " . __CLASS__ . "\n";
    }

  public function __set($property, $value) {
        parent::__set($property,$value); //appel du set de Personnage car Policier descends de Personnage
    }

  public function __get($property) {
        parent::__get($property); //appel du get de Personnage car Policier descends de Personnage
    }

}


?>
