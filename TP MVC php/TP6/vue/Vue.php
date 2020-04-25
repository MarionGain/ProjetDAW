<?php
class Vue
{
    private $titre ;

    public function __construct(string $titre){

        $this->$titre = $titre ;
    }

    public function afficherEntete(){

        echo "<html>
                    <head>
                        <title>Test : ".$this->getTitre()."</title>
                    </head>
                        <body>";

    }

    public function afficherPied(){

        echo "</body>    </html>";

    }

    public function afficherCorps(){

        echo "<p> La page est introuvable !!!!!! </p>" ;
    }

    public function afficher(){

        $this->afficherEntete();
        $this->afficherCorps();
        $this->afficherPied();

    }

    public function getTitre()
    {
        return $this->titre;
    }

}
/**
 * Vue short summary.
 *
 * Vue description.
 *
 * @version 1.0
 * @author ab587732
 */