<?php
require_once(__DIR__.'/hydratable.php');
require_once(__DIR__.'/../databases/dbIUT.php');

class Ordinateur extends hydratable
{
    private $id = 0;
    private $nom = '';
    private $ip = '0.0.0.0';
    private $ram = 0;
    private $dd = 0;
    private $proc = '';

    /**
     * Constructeur
     * @param mixed $data Données d'initialisation de la classe
     */
    public function __construct($data)
    {
        parent::__construct($data);
    }

    /**
     * Fonction d'enregistrement de l'ordinateur (ajoute ou modifie en fonction de la valeur de l'id)
     */
    public function save()
    {
        if($this->id)
            $this->update();
        else
            $this->insert();
    }

    /**
     * Ajoute l'ordinateur à la base de données
     */
    private function insert()
    {
        $query = "INSERT INTO pw_ordinateur SET nom = :nom, ip = :ip, ram = :ram, dd = :dd, proc = :proc;";
        $parameters = array(
            array( 'name' => ':nom', 'value' => $this->getNom(), 'type' => 'string'),
            array( 'name' => ':ip', 'value' => $this->getIp(), 'type' => 'string'),
            array( 'name' => ':ram', 'value' => $this->getRam(), 'type' => 'int'),
            array( 'name' => ':dd', 'value' => $this->getDd(), 'type' => 'int'),
            array( 'name' => ':proc', 'value' => $this->getProc(), 'type' => 'string')
        );

        $db = DBIUT::getInstance();
        $db->execute($query, $parameters);
    }

    /**
     * Modifie l'ordinateur dans la base de données
     */
    private function update()
    {
        $query = "UPDATE pw_ordinateur SET nom = :nom, ip = :ip, ram = :ram, dd = :dd, proc = :proc WHERE id = :id;";
        $parameters = array(
            array( 'name' => ':id', 'value' => $this->getId(), 'type' => 'int'),
            array( 'name' => ':nom', 'value' => $this->getNom(), 'type' => 'string'),
            array( 'name' => ':ip', 'value' => $this->getIp(), 'type' => 'string'),
            array( 'name' => ':ram', 'value' => $this->getRam(), 'type' => 'int'),
            array( 'name' => ':dd', 'value' => $this->getDd(), 'type' => 'int'),
            array( 'name' => ':proc', 'value' => $this->getProc(), 'type' => 'string')
        );

        $db = DBIUT::getInstance();
        $db->execute($query, $parameters);
    }

    /**
     * Supprime l'ordinateur de la base de données
     */
    public function remove()
    {
        $query = "DELETE FROM pw_ordinateur  WHERE id = :id;";
        $parameters = array(
            array( 'name' => ':id', 'value' => $this->id, 'type' => 'int')
        );

        $db = DBIUT::getInstance();
        $db->execute($query, $parameters);
    }

    /**
     * Accesseurs
     */
    protected function setId($value)
    {
        $this->id = $value;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setNom($value)
    {
        $this->nom = $value;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setIp($value)
    {
        $this->ip = $value;
    }

    public function getIp()
    {
        return $this->ip;
    }

    public function setRam($value)
    {
        $this->ram = $value;
    }

    public function getRam()
    {
        return $this->ram;
    }

    public function setDd($value)
    {
        $this->dd = $value;
    }

    public function getDd()
    {
        return $this->dd;
    }

    public function setProc($value)
    {
        $this->proc = $value;
    }

    public function getProc()
    {
        return $this->proc;
    }
}