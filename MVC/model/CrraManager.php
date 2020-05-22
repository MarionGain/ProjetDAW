<?php

require_once("ListeVuesManager.php");
class CrraManager extends RoleManager
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
       self::$_instance = new CrraManager();
     }
     return self::$_instance;
   }
}
?>
