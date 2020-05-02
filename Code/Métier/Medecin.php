<?php
require("Soigneur.php");
class Medecin extends Soigneur
{

  Private $estAide;

  function __construct() {
    $this -> estAide = 0;
    parent::__construct(); //appel du constructeur de Soigneur car Medecin descends de Soigneur
        //print "Constructeur de Medecin\n";
  }

  function __destruct() {
        //print "Destruction de " . __CLASS__ . "\n";
  }

  public function __set($property, $value) {
        parent::__set($property,$value); //appel du set de Soigneur car Medecin descends de Soigneur
    }

  public function __get($property) {
        parent::__get($property); //appel du get de Soigneur car Medecin descends de Soigneur
    }

  public function setNbAide1()
  {
    $this -> estAide  += 1 ;
  }
  
  public function getNbAide()
  {
    return $this -> estAide;
  }
  
  public function SoignerVictimes($victim){
    if ($victim->getEtat() == "Grave" ){
      $victim->Guérir();
         
    }elseif($victim->getEtat() == "Léger"){
      //placement sur la carte du médecin vers les victimes légères
      $victim->Guérir();
    }
  }
}
?>
