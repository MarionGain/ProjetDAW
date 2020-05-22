<?php
require_once("Role.php");
require_once("ListeVues.php");
class MedResponsable extends Role
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
		$nom = "MedResponsable";
    parent::__construct($l,$nom);
	}

  public static function getInstance()
  {
     if(is_null(self::$_instance)) {
       self::$_instance = new MedResponsable();
     }
     return self::$_instance;
   }
}
?>
