<?php
  require_once('../model/SimulationManager.php');
  if(!isset($_SESSION)){
      session_start();
  }


  function TableauxVictimes()
  {
    $Victimes = $_SESSION['Simulation'] -> getPMA() -> getVictimes();
    foreach($Victimes as $value)
    {
      echo "<tr>";
      echo "<td>";
      echo $value -> getSinus();
      echo "</td>";
      echo "<td>";
      echo $value -> getEtat();
      echo "</td>";
      echo "<td>";
      echo $value -> getSexe();
      echo "</td>";
      echo "<td>";
      echo $value -> getAge();
      echo "</td>";
      echo "</tr>";
    }
  }

  function TableauxAmbulance()
  {
    $Ambulances = $_SESSION['Simulation'] -> getRessources("AmbulanceManager");
    foreach($Ambulances as $value)
    {
      echo "<tr>";
      echo "<td>";
      echo $value -> getId();
      echo "</td>";
      echo "<td>";
      echo $value -> AfficheLibre();
      echo "</td>";
      echo "</tr>";
    }
  }

  function TableauxHopital()
  {
    $Hopital = $_SESSION['Simulation'] -> getRessources("HopitalManager");
    foreach($Hopital as $value)
    {
      echo "<tr>";
      echo "<td>";
      echo $value -> getNom();
      echo "</td>";
      echo "<td>";
      echo $value -> getnbLit()." Lits Disponibles";
      echo "</td>";
      echo "<td>";
      echo $value -> getDistance()." km";
      echo "</td>";
      echo "</tr>";
    }
  }
?>
