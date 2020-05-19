<?php
require_once("Role.php");
require_once("ListeVues.php");
class CRRA extends Role
{
	private static $_instance = null;

	private function __construct()
	{
		$l = array();
		$lv = listeVues::getInstance();
		foreach($lv -> getVues() as $value)
		{
			if($value -> getNom() == "VueCRRA")
			{
				array_push($l,$value);
			}
		}
		$nom = "CRRA";
    parent::__construct($l,$nom);
	}

	public static function getInstance()
  {
     if(is_null(self::$_instance)) {
       self::$_instance = new CRRA();
     }
     return self::$_instance;
   }
}
?>
