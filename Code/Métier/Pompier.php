<?php
require("Personnage.php");
class Pompier extends Personnage
{
  function __construct() {
        parent::__construct(); //appel du constructeur de Personnage car Pompier descends de Personnage
        print "Constructeur de pompier\n";
    }

  function __destruct() {
        print "Destruction de " . __CLASS__ . "\n";
    }

  public function __set($property, $value) {
        parent::__set($property,$value); //appel du set de Personnage car Pompier descends de Personnage
    }

  public function __get($property) {
        parent::__get($property); //appel du get de Personnage car Pompier descends de Personnage
    }

    //méthode pour évacuer une victime
  private function EvacuerVictim($idVictim,$idAmbulance,$Demandeur,$idHopital){ 
    if ( $idAmbulance->$libre == true && $idHopital->$place >0 ){
      //il faut vérifier que le médecin qui demande l'évacuation est bien un médecin répartiteur
      if($Demandeur instanceof MedRepartiteur){
          if($Demandeur->$libre == true){
            $idMedRepartiteur->$libre = false ;
            $idAmbulance->$libre = false;
            $idHopital->$place -=1;
          }
      }else { echo "Le médecin n'est pas un médecin répartiteur"; }
    }elseif ( $idAmbulance->$libre == false ){ echo"L'ambulance n°".$idAmbulance." n'est pas libre"; }
    elseif ($idHopital->$place = 0  || $idHopital->$place <0 ){ echo "L'hopital".$idHopital." n'a plus de place libre";}
  }
}

?>
