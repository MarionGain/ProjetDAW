<?php
require_once("Vue.php");
require_once("Victime.php");

class VueTriage extends Vue
{
  private static $_instance = null;
  private $_litGauche;
  private $_litDroit;
  private $_listeAttente;

  private function __construct()
  {
    $this -> _listeAttente = array();
    $this -> _litGauche = null;
    $this -> _litDroit = null;
    $nom = "VueTriage";
    parent::__construct($nom);
  }

  public static function getInstance()
  {
     if(is_null(self::$_instance)) {
       self::$_instance = new VueTriage();
     }
     return self::$_instance;
  }

  public function setDroit($Victime)
  {
    $this -> _litDroit = $Victime;
  }

  public function setGauche($Victime)
  {
    $this -> _litGauche = $Victime;
  }

  public function getDroit()
  {
    return $this -> _litDroit;
  }

  public function getGauche()
  {
    return $this -> _litGauche;
  }

  public function getVictime()
  {
    return $this -> _listeAttente[0];
  }

  public function AjouteVictime($victime)
  {
    array_push($this -> _listeAttente,$victime);
  }

  public function SupprVictime()
  {
    for($i = 0; $i < count($this -> _listeAttente); $i++)
    {
      if($i <count($this -> _listeAttente)-1 ){$this -> _listeAttente[$i] = $this -> _listeAttente[$i+1];}
    }
    unset($this -> _listeAttente[count($this -> _listeAttente)-1]);
  }

}
?>
