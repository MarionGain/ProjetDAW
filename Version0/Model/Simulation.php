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
require_once("PMA.php");
require_once("ListeVues.php");
require_once("ListeRoles.php");
require_once("Joueurs.php");

class Simulation
{
    private static $_instance = null;
    private $_listeVues;
    private $_listeRessources;
    private $_listeVictimes;
    private $_PMA;

    public function initVictimes($nbvictimes)
    {
      for($i = 0;$i<$nbvictimes;$i++)
      {
        $sexe = rand(0 , 1);
        switch($sexe)
        {
          case 0:
            $se = "Homme";
            break;
          case 1:
            $se = "Femme";
            break;
        }
        $description = rand(0 , 5);
        switch ($description)
        {
          case 0:
            $descr = "bléssée à la tête";
            $etat = "Grave";
            $assi = "UA";
            break;
          case 1:
            $descr = "aucune bléssure apparente";
            $etat = "Psychologique";
            $assi = "Psychologique";
            break;
          case 2:
            $descr = "Fracture à la jambe";
            $etat = "Léger";
            $assi = "UR";
            break;
          case 3:
            $descr = "Inconscient sans bléssure apparente";
            $etat = "Grave";
            $assi = "UA";
            break;
          case 4:
            $descr = "coeur perforer";
            $etat = "Mort";
            $assi = "Morgue";
            break;
          case 5:
            $descr = "Eraflure sur le bras";
            $etat = "Léger";
            $assi = "UR";
            break;
        }
        $age = rand(1 , 80);
        $victimes = new Victime($descr,$age,$i,$etat,$se,$assi);
        array_push($this -> _listeVictimes, $victimes);
      }
    }

    public function initRessources($nbPolicier,$nbMedecin,$nbPompiers,$nbAmbulance,$nbInfirmiere,$nbCamionPompier,$nbVoiturePolice)
    {
      $idRessources=0;
        for($i = 0; $i<$nbPolicier; $i++)
        {
          $policier = new Policier($idRessources);
          array_push($this -> _listeRessources, $policier);
          $idRessources++;
        }

        for($i = 0; $i<$nbMedecin; $i++)
        {
          $medecin = new Medecin($idRessources);
          array_push($this -> _listeRessources, $medecin);
          $idRessources++;
        }

        for($i = 0; $i<$nbPompiers; $i++)
        {
          $pompier = new Pompier($idRessources);
          array_push($this -> _listeRessources, $pompier);
          $idRessources++;
        }

        for($i = 0; $i<$nbAmbulance; $i++)
        {
          $nom = "Ambulance ".$i;
          $ambulance = new Ambulance($nom,$idRessources);
          array_push($this -> _listeRessources, $ambulance);
          $idRessources++;
        }

        for($i = 0; $i<$nbInfirmiere; $i++)
        {
          $infirmiere = new Infirmiere($idRessources);
          array_push($this -> _listeRessources, $infirmiere);
          $idRessources++;
        }

        for($i = 0; $i<$nbCamionPompier; $i++)
        {
          $CPompier = new Camion_Pompier($idRessources);
          array_push($this -> _listeRessources, $CPompier);
          $idRessources++;
        }

        for($i = 0; $i<$nbVoiturePolice; $i++)
        {
          $VPolice = new Voiture_Police($idRessources);
          array_push($this -> _listeRessources, $VPolice);
          $idRessources++;
        }

        $Hopital1 = new Hopital(20, "Hopital de Dieu", 40,$idRessources);
        array_push($this -> _listeRessources, $Hopital1);
        $idRessources++;
        $Hopital2 = new Hopital(14, "CHU", 50,$idRessources);
        array_push($this -> _listeRessources, $Hopital2);
        $idRessources++;
        $Hopital3 = new Hopital(10, "CHU de France", 20,$idRessources);
        array_push($this -> _listeRessources, $Hopital3);
        $idRessources++;
    }

    private function __construct()
    {
      $this -> _listeJoueurs = array();
      $this -> _listeRessources = array();
      $this -> _listeVictimes = array();
      $this -> _PMA = PMA::getInstance();
      $this -> _listeVues = listeVues::getInstance();
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

    public function getVue($nom)
    {
      foreach($this -> _listeVues -> getVues() as $value)
      {
        if($value -> getNom() == $nom)
        {
          return $value;
        }
      }
    }

    public function getPMA()
    {
      return $this -> _PMA;
    }

    public function getAllRessources()
    {
      return $this -> _listeRessources;
    }

    public function getRessource($id)
    {
      foreach($this -> _listeRessources as $value)
      {
        if($value -> getId() == $id)
        {
          return $value;
        }
      }
    }

    public function getRessources($type)
    {
      $result = array();
      for($i = 0 ; $i < count($this -> _listeRessources) ; $i++)
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
    }
}
?>
