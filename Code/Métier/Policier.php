<?php
require_once("Personnage.php");
class Policier extends Personnage
{
  Private $_nom;
  function __construct() {
        $this -> _nom = "jack";
        parent::__construct(); //appel du constructeur de Personnage car Policier descends de Personnage
        //print "Constructeur de Policier\n";
    }

  function __destruct() {
        //print "Destruction de " . __CLASS__ . "\n";
    }

  public function getNom()
  {
    return $this -> _nom;
  }

  public function __set($property, $value) {
        parent::__set($property,$value); //appel du set de Personnage car Policier descends de Personnage
    }

  public function __get($property) {
        parent::__get($property); //appel du get de Personnage car Policier descends de Personnage
    }

}


?>
