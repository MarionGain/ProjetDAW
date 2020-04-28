<?php
  require_once("../Métier/Simulation.php");
  require_once("../Vues/data.php");
  $Simulation = Simulation::getInstance();
  $Simulation -> initVictimes($nbVictimes);
  $Simulation -> initRessources($nbPolicier,$nbMedecin,$nbPompiers,$nbAmbulance,$nbInfirmiere,$nbCamionPompier,$nbVoiturePolice);
?>
