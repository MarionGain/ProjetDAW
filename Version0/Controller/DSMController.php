<?php
require_once('../Model/Simulation.php');
if(!isset($_SESSION)){
    session_start();
}

function AjouteVictime()
{
  $Victimes = $_SESSION['Simulation'] -> getVictimes();
  $vue = $_SESSION['Simulation'] -> getVue("VueTriage");
  foreach($Victimes as $value)
  {
    $vue -> AjouteVictime($value);
  }
}
?>
