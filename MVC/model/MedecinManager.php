<?php
require_once("VictimeManager.php");
require_once("InfirmiereManager.php");
require_once("RessourceManager.php");
class MedecinManager extends RessourceManager
{
  private $disponible;
  Private $infirmiere;
  private $_victime;

  function __construct($id)
  {
    $this -> disponible = "true";
    $this -> infirmiere = null;
    $this -> _victime = null;
    parent::__construct($id); //appel du constructeur de Soigneur car Medecin descends de Soigneur
        //print "Constructeur de Medecin\n";
  }

  function __destruct()
  {
        //print "Destruction de " . __CLASS__ . "\n";
  }

  public function getId()
  {
    return $this -> _id;
  }

  public function setVictime($victime)
  {
    $this -> _victime = $victime;
  }

  public function getVictime()
  {
    return $this -> _victime;
  }

  public function supprVictime()
  {
    $this -> _victime = null;
  }

  public function ajouteInfirmiere($infir)
  {
    $this -> infirmiere = $infir;
  }

  public function supprInfirmiere()
  {
    $this -> infirmiere = null;
  }

  public function getInfirmiere()
  {
    return $this -> infirmiere;
  }

  public function __set($property, $value) {
        parent::__set($property,$value); //appel du set de Soigneur car Medecin descends de Soigneur
    }

  public function __get($property) {
        parent::__get($property); //appel du get de Soigneur car Medecin descends de Soigneur
    }

  public function getDispo()
  {
    return $this -> disponible;
  }

  public function setDispo()
  {
    if($this -> disponible == "false"){$this -> disponible = "true";}
    if($this -> disponible == "true"){$this -> disponible = "false";}
  }

  public function SoignerVictimes(){
    if ($this -> _victime -> getEtat() == "Grave" )
    {
      $this -> _victime -> setCharge("true");
      if($this -> infirmiere != null)
      {
        sleep(30);
      }
      else
      {
        sleep(60);
      }
      $this -> _victime -> Guérir();
    }
    elseif($this -> _victime -> getEtat() == "Léger")
    {
      $this -> _victime -> setCharge("true");
      if($this -> infirmiere != null)
      {
        sleep(30);
      }
      else
      {
        sleep(60);
      }
      $this -> _victime -> Guérir();
    }
  }
}
?>
