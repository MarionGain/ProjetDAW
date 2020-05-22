<?php
require_once("ChefPolicier.php");
require_once("ChefPompier.php");
require_once("CRRA.php");
require_once("MaitreJeu.php");
require_once("MedRepartiteur.php");
require_once("MedResponsable.php");
require_once("MedTrieur.php");

class ListeRoles
{
  private static $_instance = null;
  private $_listeRoles = array();

  private function __construct()
  {
    $ChefPolicier = ChefPolicier::getInstance();
    $ChefPompier = ChefPompier::getInstance();
    $MedResponsable = MedResponsable::getInstance();
    $CRRA = CRRA::getInstance();
    $MaitreJeu = MaitreJeu::getInstance();
    $MedRepartiteur = MedRepartiteur::getInstance();
    $MedTrieur = MedTrieur::getInstance();
    array_push($this -> _listeRoles,$ChefPolicier);
    array_push($this -> _listeRoles,$ChefPompier);
    array_push($this -> _listeRoles,$MedResponsable);
    array_push($this -> _listeRoles,$CRRA);
    array_push($this -> _listeRoles,$MaitreJeu);
    array_push($this -> _listeRoles,$MedRepartiteur);
    array_push($this -> _listeRoles,$MedTrieur);
  }

  public static function getInstance()
  {
     if(is_null(self::$_instance)) {
       self::$_instance = new ListeRoles();
     }
     return self::$_instance;
  }

  public function getRoles()
  {
    return $this -> _listeRoles;
  }

  public function getRole($value)
  {
    foreach($this -> _listeRoles as $role)
    {
      if($role -> getNom() == $value)
      {
        return $role;
      }
    }
  }

}
?>
