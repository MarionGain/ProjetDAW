<?php
require_once("VictimeManager.php");
require_once("MedecinManager.php");
require_once("InfirmiereManager.php");
require_once("VueManager.php");

class PmaManager extends VueManager
{
  private static $_instance = null;
  private $_listeVictimes;
  private $_listeMedecinUR;
  private $_listeMedecinUA;
  private $_listeInfirmiereUR;
  private $_listeInfirmiereUA;
  private $_nbLitUR;
  private $_nbLitUA;

  private function __construct()
  {
    $nom = "PMA";
    parent::__construct($nom);
    $this -> _listeVictimes = array();
    $this -> _listeMedecinUR = array();
    $this -> _listeMedecinUA = array();
    $this -> _listeInfirmiereUR = array();
    $this -> _listeInfirmiereUA = array();
    $this -> _nbLitUR = 25;
    $this -> _nbLitUA = 25;
  }

  public static function getInstance()
  {
     if(is_null(self::$_instance)) {
       self::$_instance = new PmaManager();
     }
     return self::$_instance;
  }

  public function getVictimes()
  {
    return $this -> _listeVictimes;
  }

  public function getVictime($s)
  {
    return $this -> _listeVictimes[$s];
  }

  public function ajouteVictimeUA($victime)
  {
    if($this -> _nbLitUA > 0)
    {
      $victime -> setAssignation("UA");
      array_push($this -> _listeVictimes, $victime);
      $this -> _nbLitUA --;
      return "true";
    }
    else
    {
      return "false";
    }
  }

  public function ajouteVictimeUR($victime)
  {
    if($this -> _nbLitUR > 0)
    {
      $victime -> setAssignation("UR");
      array_push($this -> _listeVictimes, $victime);
      $this -> _nbLitUR --;
      return "true";
    }
    else
    {
      return "false";
    }
  }

  public function ajouteVictimePsy($victime)
  {
    $victime -> setAssignation("Psychologique");
    array_push($this -> _listeVictimes, $victime);
    return "true";
  }

  public function ajouteVictimeMorte($victime)
  {
    $victime -> setAssignation("Morgue");
    array_push($this -> _listeVictimes, $victime);
    return "true";
  }

  public function supprVictime($sinus)
  {
    $bool =0;
    for($i = 0; $i < count($this -> _listeVictimes); $i++)
    {
      if($bool == 1 && $i <count($this -> _listeVictimes)-1 ){$this -> _listeVictimes[$i] = $this -> _listeVictimes[$i+1];}
      if($this -> _listeVictimes[$i] -> getSinus().'' == $sinus)
      {
        $this -> _listeVictimes[$i] = $this -> _listeVictimes[$i+1];
        $bool = 1;
      }
    }
    unset($this -> _listeVictimes[count($this -> _listeVictimes)-1]);
  }

  public function ajouteMedecinUA($medecin)
  {
    array_push($this -> _listeMedecinUA, $medecin);
  }

  public function ajouteMedecinUR($medecin)
  {
    array_push($this -> _listeMedecinUR, $medecin);
  }

  public function ajouteInfirmiereUR($Infirmiere)
  {
    array_push($this -> _listeInfirmiereUR, $Infirmiere);
  }

  public function ajouteInfirmiereUA($Infirmiere)
  {
    array_push($this -> _listeInfirmiereUA, $Infirmiere);
  }

  public function soigneUR()
  {
    foreach($this -> _listeVictimes as $vict)
    {
      if($vict -> getCharge() == "false" && $vict -> getAssignation() == "UR")
      {
        if($vict -> getEtat()=="Grave" || $vict -> getEtat()=="Léger" || $vict -> getEtat()=="Psychologique")
        {
          $vict -> Guerir();
          $vict -> setAssignation("Attente evac");
          $vict -> setEtat("Soigné");
          $this -> _nbLitUR++;
          break;
        }
        if($vict -> getEtat()=="Mort")
        {
          $vict -> setAssignation("Morgue");
          $this -> _nbLitUR++;
          break;
        }
      }
    }
  }

  public function soigneUA()
  {
    foreach($this -> _listeVictimes as $vict)
    {
      if($vict -> getCharge() == "false" && $vict -> getAssignation() == "UA")
      {
        if($vict -> getEtat()=="Grave" || $vict -> getEtat()=="Léger" || $vict -> getEtat()=="Psychologique")
        {
          $vict -> Guerir();
          $vict -> setAssignation("Attente evac");
          $vict -> setEtat("Soigné");
          $this -> _nbLitUA++;
          break;
        }
        if($vict -> getEtat()=="Mort")
        {
          $vict -> setAssignation("Morgue");
          $this -> _nbLitUA++;
          break;
        }
      }
    }
  }

  public function DegradEtat()
  {
    $Degrad = "false";
    foreach($this -> _listeVictimes as $value)
    {
      if($value -> getEtat()=="Léger" || $value -> getEtat()=="Grave")
      {
        $Degrad ="true";
      }
    }
    $alea = rand ( 0 , count($this -> _listeVictimes)-1 );
    if($this -> _listeVictimes[$alea] != null && $Degrad = "true")
    {
      while ($this -> _listeVictimes[$alea] -> getEtat()!="Léger" && $this -> _listeVictimes[$alea] -> getEtat()!="Grave")
      {
        $alea = rand ( 0 , count($this -> _listeVictimes)-1 );
      }
      $this -> _listeVictimes[$alea] -> DegraderEtat();
    }
  }

  public function soignePsycho()
  {
    foreach($this -> _listeVictimes as $vict)
    {
      if($vict -> getCharge() == "false" && $vict -> getAssignation() == "Psychologique")
      {
        $vict -> Guerir();
        $vict -> setAssignation("Attente evac");
        $vict -> setEtat("Soigné");
        break;
      }
    }
  }
}
?>
