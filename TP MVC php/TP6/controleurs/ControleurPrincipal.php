<?php
include "vue/Vue.php";
include "vues/VueAccueil.php";
/**
 * ControleurPrincipal short summary.
 *
 * ControleurPrincipal description.
 *
 * @version 1.0
 * @author ab587732
 */
class ControleurPrincipal
{
    private $vue ;

    public function __construct(){

        $this->vue = new VueAccueil("accueil");
        $this->traiterDonneesGet();
        $this->vue->afficher();

    }

    public function  traiterDonneesGet(){
        if (!empty($_GET['page']) && ($_GET['page'] == 'accueil'|| $_GET['page'] =='ACCUEIL')){

            $this->vue = new vueAccueil($_GET['page']);
        }

    }


    public function  afficher(){
       $this->vue->afficher();
    }
}