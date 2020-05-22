<?php

function connexionMessage()
{
  try
    {

            //Connexion locale 
       $connexionMessage = new PDO('mysql:host=localhost;dbname=seriousGame;charset=utf8', 'root', 'root');

      // connexion sur le serveur
       // $connexionMessage = new PDO('mysql:host=sql200.byethost.com;dbname=b24_25561430_principal;charset=utf8', 'b24_25561430', 'Projetdaw21');
     }

  catch (Exception $e)
    {
          die('Erreur : ' . $e->getMessage());
    }

  return $connexionMessage;
}


function requete_and_returnMessage( $requete )
{
  $connexionMessage = connexionMessage();
  $resultat = $connexionMessage->query($requete);

  return $resultat;
}


function ajoutMessage($login,$message)
{
  $connexionMessage = connexionMessage();
  $req = "INSERT INTO chat(LOGIN,MESSAGE) VALUES(?,?)";
  $stmt= $connexionMessage->prepare($req);
  $stmt->execute( [ $login, $message ] );
}


function ajout_individuel($expediteur,$destinataire,$message)
{
  $connexionMessage = connexionMessage();
  $req = "INSERT INTO chat_individuel(EXPEDITEUR,DESTINATAIRE,MESSAGE) VALUES(?,?,?)";
  $stmt= $connexionMessage->prepare($req);
  $stmt->execute( [ $expediteur , $destinataire , $message ] );
}


?>
