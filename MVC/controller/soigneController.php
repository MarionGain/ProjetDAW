<?php
  require_once('../model/SimulationManager.php');

  if(!isset($_SESSION)){
      session_start();
  }
  $_SESSION['Simulation'] -> getPMA() -> soigneUR();
  $_SESSION['Simulation'] -> getPMA() -> soigneUA();
  $_SESSION['Simulation'] -> getPMA() -> soignePsycho();
?>
