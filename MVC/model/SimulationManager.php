<?php
require_once("VictimeManager.php");
require_once("AmbulanceManager.php");
require_once("CamionPompierManager.php");
require_once("InfirmiereManager.php");
require_once("MedecinManager.php");
require_once("PolicierManager.php");
require_once("VoiturePoliceManager.php");
require_once("PompierManager.php");
require_once("HopitalManager.php");
require_once("PmaManager.php");
require_once("ListeVuesManager.php");


class SimulationManager
{
    private static $_instance = null;
    private $_listeVues;
    private $_listeRessources;
    private $_listeVictimes;
    private $_PMA;
    private $_i;

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
        $victimes = new VictimeManager($descr,$age,$i,$etat,$se,$assi);
        array_push($this -> _listeVictimes, $victimes);
      }
    }

    public function initRessources($nbPolicier,$nbMedecin,$nbPompiers,$nbAmbulance,$nbInfirmiere,$nbCamionPompier,$nbVoiturePolice)
    {
      $idRessources=0;
        for($i = 0; $i<$nbPolicier; $i++)
        {
          $policier = new PolicierManager($idRessources);
          array_push($this -> _listeRessources, $policier);
          $idRessources++;
        }

        for($i = 0; $i<$nbMedecin; $i++)
        {
          $medecin = new MedecinManager($idRessources);
          array_push($this -> _listeRessources, $medecin);
          $idRessources++;
        }

        for($i = 0; $i<$nbPompiers; $i++)
        {
          $pompier = new PompierManager($idRessources);
          array_push($this -> _listeRessources, $pompier);
          $idRessources++;
        }

        for($i = 0; $i<$nbAmbulance; $i++)
        {
          $nom = "Ambulance ".$i;
          $ambulance = new AmbulanceManager($nom,$idRessources);
          array_push($this -> _listeRessources, $ambulance);
          $idRessources++;
        }

        for($i = 0; $i<$nbInfirmiere; $i++)
        {
          $infirmiere = new InfirmiereManager($idRessources);
          array_push($this -> _listeRessources, $infirmiere);
          $idRessources++;
        }

        for($i = 0; $i<$nbCamionPompier; $i++)
        {
          $CPompier = new CamionPompierManager($idRessources);
          array_push($this -> _listeRessources, $CPompier);
          $idRessources++;
        }

        for($i = 0; $i<$nbVoiturePolice; $i++)
        {
          $VPolice = new VoiturePoliceManager($idRessources);
          array_push($this -> _listeRessources, $VPolice);
          $idRessources++;
        }

        $Hopital1 = new HopitalManager(20, "Hopital de Dieu", 40,$idRessources);
        array_push($this -> _listeRessources, $Hopital1);
        $idRessources++;
        $Hopital2 = new HopitalManager(14, "CHU", 50,$idRessources);
        array_push($this -> _listeRessources, $Hopital2);
        $idRessources++;
        $Hopital3 = new HopitalManager(10, "CHU de France", 20,$idRessources);
        array_push($this -> _listeRessources, $Hopital3);
        $idRessources++;
    }

    private function __construct()
    {
      $this -> _listeJoueurs = array();
      $this -> _listeRessources = array();
      $this -> _listeVictimes = array();
      $this -> _PMA = PmaManager::getInstance();
      $this -> _listeVues = ListeVuesManager::getInstance();
      $this -> _i = 0;
    }

    public static function getInstance()
    {
       if(is_null(self::$_instance)) {
         self::$_instance = new SimulationManager();
       }
       return self::$_instance;
    }

    public function getVictimes()
    {
      return $this -> _listeVictimes;
    }

    public function getVictime()
    {
      $victime = $this -> _listeVictimes[$this -> _i];
      $this -> _i++;
      return $victime;
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
