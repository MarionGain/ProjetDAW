<?php 
require("Role.php");
class MedResponsable extends Role
{
    function __construct($ListeVues,$nom) 
	{
		$nom = "MedResponsable";
        parent::__construct($ListeVues,$nom);
	}
}
?>