<?php
require_once("VueManager.php");
class VueCrraManager extends VueManager
{
  private static $_instance = null;

  private function __construct()
  {
    $nom = "VueCRRA";
    parent::__construct($nom);
  }

  public static function getInstance()
  {
     if(is_null(self::$_instance)) {
       self::$_instance = new VueCrraManager();
     }
     return self::$_instance;
  }
}
?>
