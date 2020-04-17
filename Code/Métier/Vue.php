<?php
class Vue
{
  private $_nom;

  function __construct($nom)
  {
    $this -> _nom = $nom;
  }

  public function getNom()
  {
    return $this -> _nom;
  }

  public function setNom($nom)
  {
    return $this -> _nom = $nom;
  }

}
?>
