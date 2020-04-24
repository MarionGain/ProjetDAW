<?php
class Victime extends Personnage
{

$etatsPossible= array("Soigné","Léger","Grave","Psychologique","Mort");
$etat=$etatsPossible[0];
$pris_en_charge=false;
$idVictime=123;
$age=18;
$description_blessure="Il a rien";

  function __construct() {
        parent::__construct(); //appel du constructeur de Personnage car Victime descends de Personnage
        print "Constructeur de victime\n";
    }

  function __destruct() {
        print "Destruction de " . __CLASS__ . "\n";
    }

  public function Guérir(){
    if($this->$pris_en_charge == true AND $this->$etat!="Mort"){
      while($this->$etat != "Soigné"){
        if($this->$etat=="Grave"){
          sleep(120);   //"Met en pause" la fonction pendant 120 secondes pour simuler un timer
          $this->$etat==$etatsPossible[array_search("Léger",$etatsPossible)];
        }
        elseif ($this->$etat=="Léger") {
          sleep(120);   //"Met en pause" la fonction pendant 120 secondes pour simuler un timer
          $this->$etat==$etatsPossible[array_search("Soigné",$etatsPossible)];
        }
      }
    }
  }

  public function DégraderEtat(){
    if($this->$pris_en_charge == false){
      while($this->$etat != "Mort"){
        if($this->$etat=="Léger"){
          sleep(120);   //"Met en pause" la fonction pendant 120 secondes pour simuler un timer
          $this->$etat==$etatsPossible[array_search("Grave",$etatsPossible)];
        }
        elseif ($this->$etat=="Grave") {
          sleep(120);   //"Met en pause" la fonction pendant 120 secondes pour simuler un timer
          $this->$etat==$etatsPossible[array_search("Mort",$etatsPossible)];
        }
      }
    }
  }

  public function __set($property, $value) {
    if('PrisEnCharge' == $property){ //si on veux changer le booléen pris en charge
      $this->$pris_en_charge=$value; //on lui affecte une valeur
    }
    elseif ('etat' == $property) {
      $this->$etat=$etatsPossible[array_search($value,$etatsPossible)];
    }
    elseif ('id' == $property) {
      $this->$idVictime=$value;
    }
    elseif ('age' == $property) {
      $this->$age=$value;
    }
    elseif ('description' == $property) {
      $this->$description_blessure=$value;
    }
    else {
      parent::__set($property,$value); //sinon appel du set de Personnage car Victime descends de Personnage
    }
    }

  public function __get($property) {
    if('PrisEnCharge' == $property){ //si on veux changer le booléen pris en charge
      return $this->$pris_en_charge; //on lui affecte une valeur
    }
    elseif ('etat' == $property) {
      return $this->$etat;
    }
    elseif ('id' == $property) {
      return $this->$idVictime;
    }
    elseif ('age' == $property) {
      return $this->$age;
    }
    elseif ('description' == $property) {
      return $this->$description_blessure;
    }
    else {
      parent::__get($property); //appel du get de Personnage car Victime descends de Personnage
    }
    }
}
?>
