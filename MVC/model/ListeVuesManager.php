<?php
require_once("VueDsmManager.php");
require_once("VueEvacManager.php");
require_once("VueCrraManager.php");
require_once("VueTriageManager.php");

class ListeVuesManager
{
  private static $_instance = null;
  private $_listeVues = array();

  private function __construct()
  {
    $VueDSM = VueDsmManager::getInstance();
    $VueTriage = VueTriageManager::getInstance();
    $VueCRRA = VueCrraManager::getInstance();
    $VueEvac = VueEvacManager::getInstance();
  	array_push($this -> _listeVues,$VueDSM);
    array_push($this -> _listeVues,$VueTriage);
    array_push($this -> _listeVues,$VueCRRA);
    array_push($this -> _listeVues,$VueEvac);
    
  }

  public static function getInstance()
  {
     if(is_null(self::$_instance)) {
       self::$_instance = new ListeVuesManager();
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
