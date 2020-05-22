<?php
require_once("RessourceManager.php");
class VictimeManager extends RessourceManager
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
    if($this -> etat == "Léger")
    {
      $this -> etat = "Grave";
    }
    elseif ($this -> etat == "Grave")
    {
      $this -> etat = "Mort";
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
