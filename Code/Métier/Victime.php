<?php
require_once("Personnage.php");
class Victime extends Personnage
{

  private $etatsPossible;
  private $etat;
  private $pris_en_charge;
  private $idVictime;
  private $_description;
  private $_sexe;
  private $_age;

  function  __construct($description, $age, $id)
  {
        parent::__construct(); //appel du constructeur de Personnage car Victime descends de Personnage
        $this->etatsPossible = array();
        array_push($this -> etatsPossible,"Soigné","Léger","Grave","Psychologique","Mort");
        $this->etat = $this -> etatsPossible[1];
        $this->pris_en_charge = true;
        $this->idVictime = $id;
        $this->_description = $description;
        $this->_sexe = "Femme";
        $this->_age = $age;
        //print "Constructeur de victime\n";
    }

  function __destruct() {
        //print "Destruction de " . __CLASS__ . "\n";
    }

    public function getEtat()
    {
      return $this->etat;
    }
  
    public function getSinus()
    {
      return $this->idVictime;
    }
  
    public function getDescription()
    {
      return $this->_description;
    }
  
    public function getSexe()
    {
      return $this->_sexe;
    }
  
    public function getAge()
    {
      return $this->age;
    }
  
    public function setSexe($sexe)
    {
      $this->_sexe = $sexe;
    }
  
    public function changeCharge()
    {
      if($this->pris_en_charge == false)
      {
        $this->pris_en_charge = true;
      }
      elseif($this->pris_en_charge == true)
      {
        $this->pris_en_charge = false;
      }
    }
  
    public function AfficheCharge()
    {
      if($this->pris_en_charge  == true)
      {
        return "pris en charge";
      }
      elseif($this->pris_en_charge == false)
      {
        return "non pris en charge";
      }
    }
  
    public function Guérir()
    {
      if($this->AfficheCharge() == "non pris en charge" && $this->getEtat() != "Mort")
      {
        while($this->getEtat() != "Soigné")
        {
          if($this->getEtat() == "Grave")
          {
            $this->changeCharge(); 
            sleep(10);   //"Met en pause" la fonction pendant 120 secondes pour simuler un timer
            $this->setEtat("Léger");
          }
          elseif ($this->getEtat() == "Léger")
          {
            $this->changeCharge(); 
            sleep(10);   //"Met en pause" la fonction pendant 120 secondes pour simuler un timer
            $this->setEtat("Soigné");
          }
        }
      }
    }
  
    public function DégraderEtat()
    {
      if($this-> pris_en_charge == false)
      {
        while($this->getEtat() != "Mort")
        {
          if($this->getEtat() == "Léger")
          {
            $this->changeCharge(); 
            sleep(10);   //"Met en pause" la fonction pendant 120 secondes pour simuler un timer
            $this -> setEtat("Grave");
          }
          elseif ($this->getEtat() == "Grave")
          {
            $this->changeCharge(); 
            sleep(10);   //"Met en pause" la fonction pendant 120 secondes pour simuler un timer
            $this->setEtat("Mort");
          }
        }
      }
    }
  
    public function __set($property, $value) {
      if('PrisEnCharge' == $property){ //si on veux changer le booléen pris en charge
        $this->pris_en_charge=$value; //on lui affecte une valeur
      }
      elseif ('etat' == $property) {
        $this->etat= $this->etatsPossible[array_search($value,$this->etatsPossible)];
      }
      elseif ('id' == $property) {
        $this->idVictime=$value;
      }
      else {
        parent::__set($property,$value); //sinon appel du set de Personnage car Victime descends de Personnage
      }
      }
  
    public function __get($property) {
      if('PrisEnCharge' == $property){ //si on veux changer le booléen pris en charge
        return $this->pris_en_charge; //on lui affecte une valeur
      }
      elseif ('etat' == $property) {
        return $this->etat;
      }
      elseif ('id' == $property) {
        return $this->idVictime;
      }
      else {
        parent::__get($property); //appel du get de Personnage car Victime descends de Personnage
      }
      }
}
?>
