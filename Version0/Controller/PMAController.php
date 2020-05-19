<?php
  require_once('../Model/Simulation.php');

  if(!isset($_SESSION)){
      session_start();
  }

function TableauxVictimes()
{
  $Victimes = $_SESSION['Simulation'] -> getPMA() -> getVictimes();
  foreach($Victimes as $value)
  {
    $id = $value -> getSinus();
    echo "<tr>";
    echo "<td>";
    echo $id;
    echo "</td>";
    echo "<td>";
    echo $value -> getEtat();
    echo "</td>";
    echo "<td>";
    echo $value -> getAssignation();
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

function AjouteVictime()
{
  $Victimes = $_SESSION['Simulation'] -> getVictimes();
  foreach($Victimes as $value)
  {
    if($value -> getAssignation() == "UR")
    {
      $_SESSION['Simulation'] -> getPMA() -> ajouteVictimeUR($value);
    }
    elseif($value -> getAssignation() == "UA")
    {
      $_SESSION['Simulation'] -> getPMA() -> ajouteVictimeUA($value);
    }
    elseif($value -> getAssignation() == "Morgue")
    {
      $_SESSION['Simulation'] -> getPMA() -> ajouteVictimeMorte($value);
    }
    elseif($value -> getAssignation() == "Psychologique")
    {
      $_SESSION['Simulation'] -> getPMA() -> ajouteVictimePsy($value);
    }
  }

  function Soigne()
  {
    $_SESSION['Simulation'] -> getPMA() -> soigneUR();
  }
}
?>
