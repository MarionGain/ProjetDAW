<?php
require("Role.php"); 
class MedTrieur extends Role 
{	
	function __construct($ListeVues,$nom) 
	{
		$nom = "MedTrieur";
        parent::__construct($ListeVues,$nom);
	}
}

?>