<!DOCTYPE html>
<html lang="fr">
  <head>
   <link href="../public/css/menu.css" rel="stylesheet">
    <meta charset="utf-8">
    <title>Page</title>
  </head>
  <body>


    <?php
        function affiche_menu()
        {
            //Tableaux contenant des liens originaux et du texte original à afficher
            $tab_lien = array( "Vue1.php", "PMA.php","CRRA.php", "EVAC.php", "trieur.php");
            $tab_texte = array( "Vue1", "PMA","CRRA", "EVAC", "Trieur");

            //Informations sur la page actuelle
            $info = pathinfo($_SERVER['PHP_SELF']);
            $menu = "\n<nav id=\"menu\">\n    <ul id=\"onglets\">\n";

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
            $menu .= "</ul>\n</nav>";
            return $menu;
        }
    ?>

    </body>
</html>
