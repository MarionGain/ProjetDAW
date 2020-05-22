<?php
  require_once('../model/SimulationManager.php');
  require_once("../model/data.php");
  if(!isset($_SESSION)){
	session_start();
  }
  
  $Simulation = SimulationManager::getInstance();
  $Simulation -> initVictimes($nbVictimes);
  $Simulation -> initRessources($nbPolicier,$nbMedecin,$nbPompiers,$nbAmbulance,$nbInfirmiere,$nbCamionPompier,$nbVoiturePolice);
  $_SESSION['Simulation'] = $Simulation;
?>
