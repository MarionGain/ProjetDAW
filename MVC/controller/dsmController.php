<?php
require_once('../model/SimulationManager.php');
if(!isset($_SESSION)){
    session_start();
}


$Victime = $_SESSION['Simulation'] -> getVictime();
$vue = $_SESSION['Simulation'] -> getVue("VueTriage");
$vue -> AjouteVictime($Victime);
/*
function AjouteVictime()
{
  $Victimes = $_SESSION['Simulation'] -> getVictimes();
  $vue = $_SESSION['Simulation'] -> getVue("VueTriage");
  foreach($Victimes as $value)
  {
    $vue -> AjouteVictime($value);
  }
  $_COOKIE['victime']="true";
}
*/
?>
