<?php
require_once("Vue.php");
//require_once("Victime.php")
class VueTriage extends Vue
{
  private static $_instance = null;
  private $_victime;

  private function __construct()
  {
    $_victime = null;
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

  public function getVictime()
  {
    return $this -> _victime;
  }

  public function setVictime($victime)
  {
    return $this -> _victime = $victime;
  }

}
?>
