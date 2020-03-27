<?php 
require("Role.php");
class ChefPolicier extends Role  
{
	function __construct($ListeVues,$nom) 
	{
		$nom = "ChefPolicier";
        parent::__construct($ListeVues,$nom);
	}
}
?>