<?php
require_once("victime.php");
require_once("Ambulance.php");
require_once("Camion_Pompier.php");
require_once("Infirmiere.php");
require_once("Medecin.php");
require_once("Policier.php");
require_once("Voiture_Police.php");
require_once("Pompier.php");
require_once("Hopital.php");

class Simulation
{
    private static $_instance = null;
    private $_listeJoueurs;
    private $_listeRessources;
    private $_nbRessources;
    private $_listeVictimes;

    public function initVictimes($nbvictimes)
    {
      for($i = 0;$i<$nbvictimes;$i++)
      {
        $description = rand(0 , 5);
        switch ($description)
        {
          case 0:
            $descr = "bléssée à la tête";
            break;
          case 1:
            $descr = "aucune bléssure apparente";
            break;
          case 2:
            $descr = "Fracture à la jambe";
            break;
          case 3:
            $descr = "Inconscient sans bléssure apparente";
            break;
          case 4:
            $descr = "Inconscient avec saignement à la tête";
            break;
          case 5:
            $descr = "Eraflure sur le bras";
            break;
        }
        $age = rand(1 , 80);
        $victimes = new Victime($descr,$age,$i);
        array_push($this -> _listeVictimes, $victimes);
      }
    }

    public function initRessources($nbPolicier,$nbMedecin,$nbPompiers,$nbAmbulance,$nbInfirmiere,$nbCamionPompier,$nbVoiturePolice)
    {
        for($i = 0; $i<$nbPolicier; $i++)
        {
          $policier = new Policier();
          array_push($this -> _listeRessources, $policier);
          $this -> _nbRessources ++;
        }

        for($i = 0; $i<$nbMedecin; $i++)
        {
          $medecin = new Medecin();
          array_push($this -> _listeRessources, $medecin);
          $this -> _nbRessources ++;
        }

        for($i = 0; $i<$nbPompiers; $i++)
        {
          $pompier = new Pompier();
          array_push($this -> _listeRessources, $pompier);
          $this -> _nbRessources ++;
        }

        for($i = 0; $i<$nbAmbulance; $i++)
        {
          $idAmbulance = "Ambulance".$i;
          $ambulance = new Ambulance($idAmbulance);
          array_push($this -> _listeRessources, $ambulance);
          $this -> _nbRessources ++;
        }

        for($i = 0; $i<$nbInfirmiere; $i++)
        {
          $infirmiere = new Infirmiere();
          array_push($this -> _listeRessources, $infirmiere);
          $this -> _nbRessources ++;
        }

        for($i = 0; $i<$nbCamionPompier; $i++)
        {
          $CPompier = new Camion_Pompier();
          array_push($this -> _listeRessources, $CPompier);
          $this -> _nbRessources ++;
        }

        for($i = 0; $i<$nbVoiturePolice; $i++)
        {
          $VPolice = new Voiture_Police();
          array_push($this -> _listeRessources, $VPolice);
          $this -> _nbRessources ++;
        }

        $Hopital1 = new Hopital(20, "Hopital de Dieu", 40);
        array_push($this -> _listeRessources, $Hopital1);
        $this -> _nbRessources ++;
        $Hopital2 = new Hopital(14, "CHU", 50);
        array_push($this -> _listeRessources, $Hopital1);
        $this -> _nbRessources ++;
        $Hopital1 = new Hopital(10, "CHU de France", 20);
        array_push($this -> _listeRessources, $Hopital1);
        $this -> _nbRessources ++;
    }

    function __construct()
    {
      $this -> _listeJoueurs = array();
      $this -> _listeRessources = array();
      $this -> _listeVictimes = array();
      $this -> _nbRessources = 0;
    }

    public static function getInstance()
    {
       if(is_null(self::$_instance)) {
         self::$_instance = new Simulation();
       }
       return self::$_instance;
    }

    public function getVictimes()
    {
      return $this -> _listeVictimes;
    }

    public function getAllRessources()
    {
      return $this -> _listeRessources;
    }

    public function getRessources($type)
    {
      $result = array();
      for($i = 0 ; $i < $this -> _nbRessources ; $i++)
      {
        if(get_class($this -> _listeRessources[$i])==$type)
        {
          array_push($result,$this -> _listeRessources[$i]);
        }
      }
      return $result;
    }

    public function setRessource($value)
    {
      array_push($this -> _listeRessources,$value);
      $this -> _nbRessources ++;
    }
}
?>
