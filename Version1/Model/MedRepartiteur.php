<?php
require_once("Role.php");
require_once("ListeVues.php");
class MedRepartiteur extends Role
{
  private static $_instance = null;

  private function __construct()
	{
    $l = array();
		$lv = listeVues::getInstance();
		foreach($lv -> getVues() as $value)
		{
			if($value -> getNom() == "VueEvac")
			{
				array_push($l,$value);
			}
		}
		$nom = "MedRepartiteur";
    parent::__construct($l,$nom);
	}

  public static function getInstance()
  {
     if(is_null(self::$_instance)) {
       self::$_instance = new MedRepartiteur();
     }
     return self::$_instance;
   }
}
?>
