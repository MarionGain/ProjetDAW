<?php
require_once("Ressource.php");
class Camion_Pompier extends Ressource {

  private $id_Camion;

  function __construct() {
        $this -> id_Camion = 0;
        parent::__construct(); //appel du contructeur de Ressource car Camion_Pompier descends de Ressource
        //print "Constructeur du Camion de Pompier\n";
    }

function __destruct() {
      //print "Destruction de " . __CLASS__ . "\n";
  }

public function __set($property, $value) { //set du Camion_Pompier (position et image dans la classe Ressource)
      if('position' == $property){ //si on veux changer la position
        $this->_icone->position=$value; //on lui affecte une valeur
      }
      elseif ('image' == $property) { //si on veux changer l'image
        $this->_icone->image=$value; //on lui affecte une valeur
      }
      elseif ('id' == $property) { //si on veux changer l'id
        $this->id_Camion=$value; //on lui affecte une valeur
      }
      else {
        throw new Exception('Paramètre invalide !'); //sinon on retourne une erreur
      }
  }

public function __get($property) {//get de Camion_Pompier (position et image dans la classe Ressource)
      if('position' == $property){ //si on veux la position
        return $this->_icone->position; //on la retourne
      }
      elseif ('image' == $property) { //si on veux l'image
        return $this->_icone->image; //on la retourne
      }
      elseif ('id' == $property) { //si on veux l'id
        return $this->id_Camion; //on le retourne
      }
      else {
        throw new Exception('Paramètre invalide !'); //sinon on retourne une erreur
      }
  }


}

 ?>
