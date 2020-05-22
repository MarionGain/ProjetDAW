<?php
require_once('../model/SimulationManager.php');
if(!isset($_SESSION)){
    session_start();
}

$_SESSION['Simulation'] -> DegradEtat();

?>
