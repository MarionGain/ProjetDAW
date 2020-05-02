<?php
require("Personnage.php");
class Pompier extends Personnage
{
  function __construct() {
    parent::__construct(); //appel du constructeur de Personnage car Pompier descends de Personnage
    //print "Constructeur de pompier\n";
  }

  function __destruct() {
    //print "Destruction de " . __CLASS__ . "\n";
  }

  public function __set($property, $value) {
    parent::__set($property,$value); //appel du set de Personnage car Pompier descends de Personnage
  }

  public function __get($property) {
    parent::__get($property); //appel du get de Personnage car Pompier descends de Personnage
  }

  //méthode pour évacuer une victime
  function EvacuerVictim($victim,$ambulance,$hopital){
    if ( $ambulance->libre == true && $hopital->getnbLit() >0 ){
      $ambulance->libre = false;
      $hopital->setnbLit1();
    }elseif ( $ambulance->libre == false ){ echo"L'ambulance n° n'est pas libre"; }
    elseif ($hopital->_nbLitDispo = 0  || $hopital->_nbLitDispo <0 ){ echo "L'hopital n'a plus de place libre";}
  }
  
    //méthode pour récupèrer la victime
  public function RecupererVictim(){
    //déplacement de l'îcone du pompier jusqu'à la victime
    sleep(20);   //"Met en pause" la fonction pendant 20 secondes pour simuler un timer
    // déplacement du pompier et de la victime jusqu'au PMA
  }
}

?>
