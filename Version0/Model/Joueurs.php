<?php
class Joueurs
{
    //private $_login ;
    private $_role ;
    private $nom;

  function __construct(/*$_l*/$_r, $nom){
        //$this->$_login = $_l;
        $this -> nom = $nom;
        $this-> _role = $_r;
        //print"Constructeur du joueur\n";
    }

  public function getNom()
  {
    return $this -> nom;
  }

  public function getRole()
  {
    return $this -> _role;
  }

    function __destruct(){
        //print "Destruction de " . __CLASS__ . "\n";
    }

    public function __set($property, $value) { //set pour login, rôle et simulation du joueur
        if('login' == $property){ //si on veux changer le login
          $this->_login =$value; //on lui affecte une valeur
        }
        elseif ('role' == $property) { //si on veut changer le role
          $this->_role =$value; //on lui affecte une valeur
        }
        elseif ('simulation' == $property) { //si on veut changer la simulation
            $this->_simulation =$value; //on lui affecte une valeur
          }
        else {
          throw new Exception('Paramètre invalide !'); //sinon on retourne une erreur
        }
    }

    public function __get($property) {//get pour login, rôle et simulation du joueur
        if('login' == $property){ //si on veut le login
          return $this->_login; //on le retourne
        }
        elseif ('role' == $property) { //si on veut le role
          return $this->_role; //on le retourne
        }
        elseif ('simulation' == $property) { //si on veut la simulation
            return $this->_simulation; //on la retourne
          }
        else {
          throw new Exception('Paramètre invalide !'); //sinon on retourne une erreur
        }
    }

    public function getJoueur($property){ //pour récupèrer le joueur en entier
        return $this ;
    }
}

?>
