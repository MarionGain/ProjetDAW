<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="../styles/Scenario.css" rel="stylesheet">
        <title>Scénario</title>
    </head>

    <body>

            <?php require_once("../header_footer/header.php");?>


        <h1 id="titre" >Page de scénario</h1>

        <section>
            <aside>
                <img id="imageGauche" src="../Images/bus_accident.jpg" alt="Accident de bus" title="Accident de bus"/>
                <img id="imageGauche" src="../Images/bus.jpg" alt="Accident de bus" title="Accident de bus"/>
            </aside>

            <article>
                <div id="texte">
                    <p> AVP (accident de la voie publique) avec un car qui relie Dijon à Nuits Saint Georges à l’occasion de la Saint Vincent,
                    il sort de la route et tombe dans un ravin. Bilan d’ambiance 40 impliqués,
                    dont de nombreux blessés graves, incarcérés, pas de notion d’incendie, pas d’enfants.</p>
                </div>
                <div class="bouton">
                    <button type="button" name="Suivant">Rejoindre la partie</button>
                </div>
            </article>

            <aside>
                <img id="imageDroite" src="../Images/samu.jpg" alt="Ambulance" title="Ambulance"/>
                <img id="imageDroite" src="../Images/police.jpg" alt="Voiture de police" title="Voiture de police" />
            </aside>
        </section>


            <?php require_once("../header_footer/footer.php");?>

    </body>
</html>
