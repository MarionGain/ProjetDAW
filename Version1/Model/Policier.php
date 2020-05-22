<?php
require_once("Ressource.php");
class Policier extends Ressource
{
  Private $_nom;
  function __construct($id) {
        $this -> _nom = "jack";
        parent::__construct($id); //appel du constructeur de Personnage car Policier descends de Personnage
        //print "Constructeur de Policier\n";
    }

  function __destruct() {
        //print "Destruction de " . __CLASS__ . "\n";
    }

  public function getId()
  {
    return $this -> _id;
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
