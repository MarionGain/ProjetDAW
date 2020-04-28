<?php
  require_once("../Métier/Simulation.php");

  function TableauxVictimes()
  {
    $Simulation = Simulation::getInstance();
    $Victimes = $Simulation -> getVictimes();
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
    $Simulation = Simulation::getInstance();
    $Ambulances = $Simulation -> getRessources("Ambulance");
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
    $Simulation = Simulation::getInstance();
    $Hopital = $Simulation -> getRessources("Hopital");
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
