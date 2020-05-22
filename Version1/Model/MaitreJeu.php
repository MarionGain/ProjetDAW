<?php
require_once("Role.php");
require_once("ListeVues.php");
class MaitreJeu extends Role
{
  private static $_instance = null;

  private function __construct()
	{
		$lv = listeVues::getInstance();
		$nom = "MaitreJeu";
    parent::__construct($lv -> getVues(),$nom);
	}

  public static function getInstance()
  {
     if(is_null(self::$_instance)) {
       self::$_instance = new MaitreJeu();
     }
     return self::$_instance;
   }
}
?>
