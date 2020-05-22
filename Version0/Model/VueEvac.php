<?php
require_once("Vue.php");
class VueEvac extends Vue
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
       self::$_instance = new VueEvac();
     }
     return self::$_instance;
   }

}
?>
