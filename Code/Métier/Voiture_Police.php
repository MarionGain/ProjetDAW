<?php
class Voiture_Police extends Ressource {

$id_VoiturePolice=0;

function __construct() {
      parent::__construct(); //appel du contructeur de Ressource car Voiture_Police descends de Ressource
      print "Constructeur de la Voiture de Police\n";
  }

function __destruct() {
      print "Destruction de " . __CLASS__ . "\n";
  }

public function __set($property, $value) { //set de Voiture_Police (position et image dans la classe Ressource)
      if('position' == $property){ //si on veux changer la position
        $this->_icone->position=$value; //on lui affecte une valeur
      }
      elseif ('image' == $property) { //si on veux changer l'image
        $this->_icone->image=$value; //on lui affecte une valeur
      }
      elseif ('id' == $property) { //si on veux changer l'id
        $this->$id_VoiturePolice=$value; //on lui affecte une valeur
      }
      else {
        throw new Exception('Paramètre invalide !'); //sinon on retourne une erreur
      }
  }

public function __get($property) {//get de Voiture_Police (position et image dans la classe Ressource)
      if('position' == $property){ //si on veux la position
        return $this->_icone->position; //on la retourne
      }
      elseif ('image' == $property) { //si on veux l'image
        return $this->_icone->image; //on la retourne
      }
      elseif ('id' == $property) { //si on veux l'id
        return $this->$id_VoiturePolice; //on le retourne
      }
      else {
        throw new Exception('Paramètre invalide !'); //sinon on retourne une erreur
      }
  }


}

 ?>
