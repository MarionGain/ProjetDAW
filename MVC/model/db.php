<?php

// Méthode qui effectue la connexion à la base de donnée
function connexion()
{
  try
    {
  	   $connexion = new PDO('mysql:host=localhost;dbname=seriousGame;charset=utf8', 'root', 'root');
       //echo "<h1>SQL - connexion établie !</h1>";
     }

  catch (Exception $e)
    {
          die('Erreur : ' . $e->getMessage());
    }

  return $connexion;
}


// Fonction effectuant une requête sans valeur de retour
function requete( $requete )
{
  $connexion = connexion();
  $connexion->query($requete);
}

// Fonction qui effectue une requête dans la base de donnée PROJET (indiqué dans la fonction connexion()), return le resultat de la requête
function requete_and_return( $requete )
{
  $connexion = connexion();
  $resultat = $connexion->query($requete);

  return $resultat;
}

// Fonction vérifiant si $login passé en parametre se trouve dans la table login, return le nombre de ligne resultant la requête
function existe( $login , $mail )
{
  $requete=requete_and_return('SELECT COUNT(*) AS nb FROM login WHERE LOGIN="'.$login.'" OR MAIL="'.$mail.'"');
  $data = $requete->fetch();
  $nb=$data['nb'];
  $requete->closeCursor();

  return $nb;
}

function existe_login( $login )
{
  $requete=requete_and_return('SELECT COUNT(*) AS nb FROM login WHERE LOGIN="'.$login.'"');
  $data = $requete->fetch();
  $nb=$data['nb'];
  $requete->closeCursor();

  return $nb;
}

function connect($login){
  $connexion = connexion();
  $req = "INSERT INTO CONNECTES(LOGIN) VALUES(?)";
  $stmt= $connexion->prepare($req);
  $stmt->execute( [$login] );
}

function verif_login_password( $login , $password )
{
  $requete=requete_and_return('SELECT COUNT(*) AS nb FROM login WHERE LOGIN="'.$login.'" AND PASSWORD ="'.$password.'"');
  $data = $requete->fetch();
  $nb=$data['nb'];
  $requete->closeCursor();

  return $nb;
}

// Fonction pour ajouter un nouveau user dans la table Login
function ajout( $login , $mdp , $mail )
{
  $connexion = connexion();
  $req = "INSERT INTO login(LOGIN,PASSWORD,MAIL) VALUES(?,?,?)";
  $stmt= $connexion->prepare($req);
  $stmt->execute( [ $login, $mdp , $mail ] );
}

function insert_role($login, $role){
  $connexion = connexion();
  $req = "INSERT INTO ROLE(login,role) VALUES(?,?)";
  $stmt= $connexion->prepare($req);
  $stmt->execute( [ $login, $role] );
}
 ?>
