<?php
require_once("VueDSM.php");
require_once("VueEvac.php");
require_once("VueCRRA.php");
require_once("VueTriage.php");

class listeVues
{
  private static $_instance = null;
  private $_listeVues = array();

  private function __construct()
  {
    $VueDSM = VueDSM::getInstance();
    $VueTriage = VueTriage::getInstance();
    $VueCRRA = VueCRRA::getInstance();
    $VueEvac = VueEvac::getInstance();
  	array_push($this -> _listeVues,$VueDSM);
    array_push($this -> _listeVues,$VueTriage);
    array_push($this -> _listeVues,$VueCRRA);
    array_push($this -> _listeVues,$VueEvac);
  }

  public static function getInstance()
  {
     if(is_null(self::$_instance)) {
       self::$_instance = new listeVues();
     }
     return self::$_instance;
  }

  public function getVues()
  {
    return $this -> _listeVues;
  }

  //récupere une vue dans la liste de vue a partir du nom
  public function getVue($value)
  {
    foreach($this -> _listeVues as $vue)
    {
      if($vue -> getNom() == $value)
      {
        return $vue;
      }
    }
  }
}
?>
