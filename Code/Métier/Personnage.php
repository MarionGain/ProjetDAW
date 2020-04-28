<?php
require_once("Ressource.php");
class Personnage extends Ressource
{
  function __construct()
  {
        parent::__construct(); //appel du contructeur de Ressource car personnage descends de Ressource
        //print "Constructeur de personnage\n";
  }

  function __destruct() {
        //print "Destruction de " . __CLASS__ . "\n";
    }

  public function __set($property, $value) { //set pour position et image de l'icone du personnage (icone dans la classe Ressource)
        if('position' == $property){ //si on veux changer la position
          $this->_icone->position=$value; //on lui affecte une valeur
        }
        elseif ('image' == $property) { //si on veut changer l'image
          $this->_icone->image=$value; //on lui affecte une valeur
        }
        else {
          throw new Exception('Paramètre invalide !'); //sinon on retourne une erreur
        }
    }

  public function __get($property) {//get pour position et image de l'icone du personnage (icone dans la classe Ressource)
        if('position' == $property){ //si on veut la position
          return $this->_icone->position; //on la retourne
        }
        elseif ('image' == $property) { //si on veut l'image
          return $this->_icone->image; //on la retourne
        }
        else {
          throw new Exception('Paramètre invalide !'); //sinon on retourne une erreur
        }
    }
}
?>
