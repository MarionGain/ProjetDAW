<?php
require_once("VueManager.php");
class VueEvacManager extends VueManager
{
  private static $_instance = null;

  private function __construct()
  {
    $nom = "VueEvac";
    parent::__construct($nom);
  }

  public static function getInstance()
  {
     if(is_null(self::$_instance)) {
       self::$_instance = new VueEvacManager();
     }
     return self::$_instance;
   }

}
?>
