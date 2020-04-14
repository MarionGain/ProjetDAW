<?php

function ok()
{
    echo "<script>alert(\"la variable est nulle\")</script>";
}

function connexion()
{
  try
    {
  	   $connexion = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');
     }

  catch (Exception $e)
    {
          die('Erreur : ' . $e->getMessage());
    }

  return $connexion;
}


function requete_and_return( $requete )
{
  $connexion = connexion();
  $resultat = $connexion->query($requete);

  return $resultat;
}


function ajout($login,$message)
{
  $connexion = connexion();
  $req = "INSERT INTO chat(LOGIN,MESSAGE) VALUES(?,?)";
  $stmt= $connexion->prepare($req);
  $stmt->execute( [ $login, $message ] );
}



?>
