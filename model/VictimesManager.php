<?php
class VictimesManager
{
    private $_id;
    private $_etat;
    private $_prisEnCharge;
    private $_age;
    private $_descriptionBlessure;


      // Liste des getters
  
  public function id(){return $this->_id;}
  
  public function etat(){return $this->etat;}
  
  public function _prisEnCharge(){return $this->_prisEnCharge;}
  
  public function age(){return $this->_age;}
  
  public function _descriptionBlessure(){return $this->_descriptionBlessure;}
 

  // Liste des setters
  
  public function setId($id)
  {
    $id = (int) $id;

    if ($id > 0)
    {
      $this->_id = $id;
    }
  }
  
  public function setEtat($etat)
  {
    if (is_string($etat))
    {
      $this->_etat = $etat;
    }
  }
  
  public function setAge($age)
  {
    $age = (int) $age;
    
    if ($age >= 1 && $age <= 100)
    {
      $this->_age = $age;
    }
  }
  
  public function setDescriptionBlessure($description)
  {
      if (is_string($description))
    {
      $this->_descriptionBlessure = $description;
    }
  }
  
  public function setPrisEnCharge($prisEnCharge)
  {
    // caster booléen
    $prisEnCharge = () $niveau;
    $this->_prisEnCharge = $prisEnCharge;
    
  }
  
    public function hydrate(array $donnees)
    {
      if (isset($donnees['id']))
      {
        $this->setId($donnees['id']);
      }

      if (isset($donnees['age']))
      {
        $this->setNom($donnees['age']);
      }

       if (isset($donnees['etat']))
      {
        $this->setNom($donnees['etat']);
      }

         if (isset($donnees['etat']))
      {
        $this->setNom($donnees['etat']);
      }

    }

    public function getVictimes()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, age, etat, description AS victime FROM victimes ORDER BY etat');

        return $req;
    }

    public function getVictime($victimeId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, age, etat, description AS victime FROM victimes WHERE id = ?');
        $req->execute(array($victimeId));
        $victime = $req->fetch();

        return $victime;
    }



    private function createVictime($age, )



    private function dbConnect()
    {
        $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
        return $db;
    }
}