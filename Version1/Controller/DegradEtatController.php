<?php
require_once('../Model/Simulation.php');
if(!isset($_SESSION)){
    session_start();
}

$_SESSION['Simulation'] -> DegradEtat();

?>
