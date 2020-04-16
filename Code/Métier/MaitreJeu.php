<?php 
require("Role.php");
class MaitreJeu extends Role  
{
    function __construct($ListeVues,$nom) 
	{
		$nom = "MaitreJeu";
        parent::__construct($ListeVues,$nom);
	}
}
?>