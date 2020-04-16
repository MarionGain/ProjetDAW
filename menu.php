<?php
    function affiche_menu()
    {
        //Tableaux contenant des liens originaux et du texte original à afficher
        $tab_lien = array( "VUE1.php", "VUE2.php", "VUE3.php", "VUE4.php");
        $tab_texte = array( "Vue1", "Vue2", "Vue3", "Vue4");

        //Informations sur la page actuelle
        $info = pathinfo($_SERVER['PHP_SELF']);
        $menu = "\n<div id=\"menu\">\n    <ul id=\"onglets\">\n";

        //Boucle qui parcours les deux tableaux
        foreach($tab_lien as $cle=>$lien)
        {
            $menu .= "    <li";

            //Si le nom du fichier correspond à celui pointé par l'indice, alors on l'active
            if( $info['basename'] == $lien ){
                $menu .= " class=\"active\"";
            }
            $menu .= "><a href=\"" . $lien . "\">" . $tab_texte[$cle] . "</a></li>\n";
        }
        $menu .= "</ul>\n</div>";
        return $menu;
    }
?>
