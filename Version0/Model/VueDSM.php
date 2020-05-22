<?php
require_once("Vue.php");
class VueDSM extends Vue
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
       self::$_instance = new VueDSM();
     }
     return self::$_instance;
   }

}
?>
