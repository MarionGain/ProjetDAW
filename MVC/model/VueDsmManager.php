<?php
require_once("VueManager.php");
class VueDsmManager extends VueManager
{
  private static $_instance = null;

  private function __construct()
  {
    $nom = "VueDSM";
    parent::__construct($nom);
  }

  public static function getInstance()
  {
     if(is_null(self::$_instance)) {
       self::$_instance = new VueDsmManager();
     }
     return self::$_instance;
   }

}
?>
