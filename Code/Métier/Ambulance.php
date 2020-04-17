<?php
class Ambulance extends Ressource {

$id_Ambulance=0;
$libre=false;

function __construct() {
      parent::__construct(); //appel du contructeur de Ressource car Ambulance descends de Ressource
      print "Constructeur de l'ambulance\n";
  }

function __destruct() {
      print "Destruction de " . __CLASS__ . "\n";
  }

public function __set($property, $value) { //set de l'Ambulance (position et image dans la classe Ressource)
      if('position' == $property){ //si on veux changer la position
        $this->_icone->position=$value; //on lui affecte une valeur
      }
      elseif ('image' == $property) { //si on veux changer l'image
        $this->_icone->image=$value; //on lui affecte une valeur
      }
      elseif ('id' == $property) { //si on veux changer l'id
        $this->$id_Ambulance=$value; //on lui affecte une valeur
      }
      elseif ('libre' == $property) { //si on veux changer l'attribut libre
        $this->$libre=$value; //on lui affecte une valeur
      }
      else {
        throw new Exception('Paramètre invalide !'); //sinon on retourne une erreur
      }
  }

public function __get($property) {//get de l'Ambulance (position et image dans la classe Ressource)
      if('position' == $property){ //si on veux la position
        return $this->_icone->position; //on la retourne
      }
      elseif ('image' == $property) { //si on veux l'image
        return $this->_icone->image; //on la retourne
      }
      elseif ('id' == $property) { //si on veux l'id
        return $this->$id_Ambulance; //on le retourne
      }
      elseif ('libre' == $property) { //si on veux l'attribut libre
        return $this->$libre; //on le retourne
      }
      else {
        throw new Exception('Paramètre invalide !'); //sinon on retourne une erreur
      }
  }


}

 ?>
