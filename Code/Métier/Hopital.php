<?php
require_once("Ressource.php");
class Hopital extends Ressource
{
  Private $_nbLitDispo;
  Private $_nom;
  Private $_Distance;

  function __construct($Nblit, $nom, $Dist)
  {
    $this -> _nbLitDispo = $Nblit;
    $this -> _nom = $nom;
    $this -> _Distance = $Dist;
  }

  public function getnbLit()
  {
    return $this -> _nbLitDispo;
  }

  public function setnbLit1()
  {
    $this -> _nbLitDispo -=1;
  }
  
  public function getNom()
  {
    return $this -> _nom;
  }

  public function getDistance()
  {
    return $this -> _Distance;
  }

  public function recevoirPatient()
  {
    $this -> _nbLitDispo --;
  }
}
?>
