<?php
require_once("Ressource.php");
class Hopital extends Ressource
{
  Private $_nbLitDispo;
  Private $_nom;
  Private $_Distance;

  function __construct($Nblit, $nom, $Dist, $id)
  {
    parent::__construct($id);
    $this -> _nbLitDispo = $Nblit;
    $this -> _nom = $nom;
    $this -> _Distance = $Dist;
  }

  public function getId()
  {
    return $this -> _id;
  }

  public function getnbLit()
  {
    return $this -> _nbLitDispo;
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
