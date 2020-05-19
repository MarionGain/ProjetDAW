<?php
  require_once('../Model/Simulation.php');
  require_once("../View/data.php");
  session_start();
  $Simulation = Simulation::getInstance();
  $Simulation -> initVictimes($nbVictimes);
  $Simulation -> initRessources($nbPolicier,$nbMedecin,$nbPompiers,$nbAmbulance,$nbInfirmiere,$nbCamionPompier,$nbVoiturePolice);
  $_SESSION['Simulation'] = $Simulation;
?>
