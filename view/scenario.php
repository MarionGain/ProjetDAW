<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="../public/css/scenario.css" rel="stylesheet">
        <title>Scénario</title>
    </head>

    <body>
        <header>
            <?php require_once("header.php");?>
        </header>

        <h1 id="titre" >Page de scénario</h1>
        
        <section>
            <aside>
                <img id="imageGauche" src="../public/images/bus_accident.jpg" alt="Accident de bus" title="Accident de bus"/>
                <img id="imageGauche" src="../public/images/bus.jpg" alt="Accident de bus" title="Accident de bus"/>
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
                <img id="imageDroite" src="../public/images/samu.jpg" alt="Ambulance" title="Ambulance"/>
                <img id="imageDroite" src="../public/images/police.jpg" alt="Voiture de police" title="Voiture de police" />
            </aside>
        </section>

        <footer>
            <?php require_once("footer.php");?>
        </footer>
    </body>
</html>
