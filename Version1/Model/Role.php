<?php
require_once("ListeVues.php");
class Role
{
	private $_listeVues = array();
	private $_nom;

	function __construct($listeVues, $nom)
	{
		$this -> _nom = $nom;
		foreach($listeVues as $value)
		{
			array_push($this -> _listeVues,$value);
		}
	}

	//ajoute une vue
	public function setVue($vue)
	{
		array_push($this -> _listeVues,$vue);
	}

	//récupere toutes les vue du role
	public function getVues()
	{
		return $this -> _listeVues;
	}

	//récupere une vue dans la liste de vue a partir du nom
	public function getVue($value)
	{
		foreach($this -> _listeVues as $vue)
		{
			if($vue -> getNom() == $value)
			{
				return $vue;
			}
		}
	}

	//récupère le nom du role
	public function getNom()
	{
		return $this -> _nom;
	}

	//change le nom du role
	public function setNom($value)
	{
		$this -> _nom = $value;
	}
}
?>
