<?php
abstract class Ressource
{
  private $_icone ;
  protected $_id;

  function __construct($id)
  {
        $this -> _icone = null;
        $this -> _id = $id;
        //print "Constructeur de personnage\n";
  }
  abstract protected function getId();

}
?>
