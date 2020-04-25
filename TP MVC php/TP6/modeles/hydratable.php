<?php

/**
 * Permet à une classe d'être "hydratée"
 */
class Hydratable
{
    /**
     * Constructeur
     * @param mixed $data Données avec lesquelles initialiser l'instance de la classe
     */
    public function __construct($data)
    {
        $this->hydrate($data);   
    }

    /**
     * Fonction d'initialisation de la classe
     * @param mixed $data Données avec lesquelles initialiser l'instance
     */
    public function hydrate($data)
    {
        foreach($data as $property => $value)
        {
            $method = 'set'.ucfirst($property);

            if(method_exists($this, $method))
                $this->$method($value);
        }
    }
}