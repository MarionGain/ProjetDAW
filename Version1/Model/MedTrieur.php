<?php
require_once("Role.php");
require_once("ListeVues.php");
class MedTrieur extends Role
{
	private static $_instance = null;

	private function __construct()
	{
		$l = array();
		$lv = listeVues::getInstance();
		foreach($lv -> getVues() as $value)
		{
			if($value -> getNom() == "VueTriage")
			{
				array_push($l,$value);
			}
		}
		$nom = "MedTrieur";
    parent::__construct($l,$nom);
	}

	public static function getInstance()
  {
     if(is_null(self::$_instance)) {
       self::$_instance = new MedTrieur();
     }
     return self::$_instance;
   }

	 public function EnvoyerUR()
	 {

	 }

	 public function EnvoyerUA()
	 {

	 }

	 public function EnvoyerMorgue()
	 {

	 }

	 public function EnvoyerCUMP()
	 {
		 
	 }
}
?>
