<?php
require_once("Personnage.php");
class Victime extends Personnage
{

  private $etatsPossible;
  private $etat;
  private $_assigner;
  private $pris_en_charge;
  private $idVictime;
  private $_description;
  private $_sexe;
  private $_age;

  function __construct($description, $age, $id, $e, $sexe,$assi)
  {
        parent::__construct($id); //appel du constructeur de Personnage car Victime descends de Personnage
        $this -> etatsPossible = array();
        array_push($this -> etatsPossible,"Soigné","Léger","Grave","Psychologique","Mort","inconnue");
        $this -> etat = $e;
        $this -> pris_en_charge = "false";
        $this -> idVictime = $id;
        $this -> _description = $description;
        $this -> _sexe = $sexe;
        $this -> _age = $age;
        $this -> _assigner = $assi;
        //print "Constructeur de victime\n";
  }

  function __destruct()
  {
        //print "Destruction de " . __CLASS__ . "\n";
  }

  public function getAssignation()
  {
    return $this -> _assigner;
  }

  public function setAssignation($a)
  {
    $this -> _assigner = $a;
  }

  public function getEtat()
  {
    return $this -> etat;
  }

  public function getCharge()
  {
    return $this -> pris_en_charge;
  }

  public function getSinus()
  {
    return $this -> idVictime;
  }

  public function getId()
  {
    return $this -> _id;
  }

  public function getDescription()
  {
    return $this -> _description;
  }

  public function getSexe()
  {
    return $this -> _sexe;
  }

  public function getAge()
  {
    return $this -> _age;
  }

  public function setSexe($sexe)
  {
    $this -> _sexe = $sexe;
  }

  public function setEtat($e)
  {
    $this -> etat = $e;
  }

  public function setCharge($c)
  {
    $this -> pris_en_charge = $c;
  }

  public function Guerir()
  {
    if($this -> pris_en_charge == "true" AND $this -> etat != "Mort")
    {
      $this -> etat == $etatsPossible[array_search("Soigné",$etatsPossible)];
    }
  }

  public function DegraderEtat()
  {
    if($this-> pris_en_charge == false)
    {
      while($this -> etat != "Mort")
      {
        if($this -> etat == "Léger")
        {
          $this -> etat == $etatsPossible[array_search("Grave",$etatsPossible)];
        }
        elseif ($this -> etat == "Grave")
        {
          $this -> etat == $etatsPossible[array_search("Mort",$etatsPossible)];
        }
        sleep(120); //"Met en pause" la fonction pendant 120 secondes pour simuler un timer
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
    else {
      parent::__get($property); //appel du get de Personnage car Victime descends de Personnage
    }
    }
}
?>
