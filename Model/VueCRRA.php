<?php
require_once("Vue.php");
class VueCRRA extends Vue
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
       self::$_instance = new VueCRRA();
     }
     return self::$_instance;
  }
}
?>
