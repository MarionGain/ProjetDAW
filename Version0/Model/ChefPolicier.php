<?php
require_once("Role.php");
require_once("ListeVues.php");
class ChefPolicier extends Role
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
		$nom = "ChefPolicier";
    parent::__construct($l,$nom);
	}

	public static function getInstance()
  {
     if(is_null(self::$_instance)) {
       self::$_instance = new ChefPolicier();
     }
     return self::$_instance;
   }
}
/*$test = ChefPolicier::getInstance();
echo $test -> getNom()."<br/>";
foreach($test -> getVues() as $values)
{
	echo $values -> getNom() ."<br/>";
}*/
?>
