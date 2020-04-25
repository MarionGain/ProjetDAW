<?php
require_once(__DIR__.'/ordinateur.php');

/**
 * Gestion des ordinateurs d'un parc informatique
 */
class Ordinateurs
{
    //Liste des ordinateurs du parc
    private $ordinateurs = array();

    /**
     * Constructeur
     */
    public function __construct()
    {
        $this->getAll();
    }

    /**
     * Récupère tous les ordinateurs du parc
     */
    private function getAll()
    {
        $query = "SELECT * FROM pw_ordinateur";
        $results = null;

        $db = DBIUT::getInstance();

        if($db->get($query, $results))
        {
            foreach($results as $data)
            {
                $ordinateur = new Ordinateur($data);
                $this->ordinateurs[] = $ordinateur;
            }
        }
    }

    /**
     * Récupère l'oridnateur dont l'id est fourni
     * @param mixed $id Id de l'ordintateur à trouver
     * @return null|Ordinateur null ou Ordinateur récupéré
     */
    public function getOrdinateur($id)
    {
        $query = "SELECT * FROM pw_ordinateur WHERE id = :id;";
        $parameters = array( array('name' => ':id', 'value' => $id, 'type' => 'int'));
        $results = null;

        $db = DBIUT::getInstance();

        if($db->get($query, $results, $parameters))
        {
            return new Ordinateur($results[0]);
        }

        return null;
    }

    /**
     * Retourne l'attribut ordintaurs de l'instance
     * @return Ordinateur[]
     */
    public function getOrdinateurs()
    {
        return $this->ordinateurs;
    }
}