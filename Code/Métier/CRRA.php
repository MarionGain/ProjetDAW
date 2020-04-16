<?php 
require("Role.php");
class CRRA extends Role 
{
	function __construct($ListeVues,$nom) 
	{
		$nom = "CRRA";
        parent::__construct($ListeVues,$nom);
	}
}
?>