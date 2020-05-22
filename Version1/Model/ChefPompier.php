<?php
require_once("Role.php");
require_once("ListeVues.php");
class ChefPompier extends Role
{
  private static $_instance = null;

  private function __construct()
	{
    $l = array();
		$lv = listeVues::getInstance();
		foreach($lv -> getVues() as $value)
		{
			if($value -> getNom() == "VueDSM")
			{
				array_push($l,$value);
			}
		}
		$nom = "ChefPompier";
    parent::__construct($l,$nom);
	}

  public static function getInstance()
  {
     if(is_null(self::$_instance)) {
       self::$_instance = new ChefPompier();
     }
     return self::$_instance;
   }
}
?>
