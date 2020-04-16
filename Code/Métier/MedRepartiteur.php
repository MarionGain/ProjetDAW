<?php 
require("Role.php");
class MedRepartiteur extends Role 
{
    function __construct($ListeVues,$nom) 
	{
		$nom = "MedRepartiteur";
        parent::__construct($ListeVues,$nom);
	}
}
?>