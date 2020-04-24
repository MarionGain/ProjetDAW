<?php

function OpenCon()
{
  $host = "localhost";
  $login = "root";
  $password = "";
  $database = "projet";

//à changer pour adapter au type de BD
try {
  $conn = new PDO('mysql:host=localhost;dbname=principal;charset=utf8', 'root', '');
  //Q1 $dbh->query("INSERT INTO GROUPE VALUES(\"TP1\"),(\"TP2\"),(\"TP3\"),(\"TP4\")");
} catch (PDOException $e){
  print "ERREUUUUUUUUUUUUUUUR !!!!!!!! : ".$e->getMessage()."<br />";
  die();
}
  return $conn;
  CloseCon($conn);
}

function CloseCon($conn)
 {
 $conn -> close();
 }


 function ajout( $login )
 {
   $connexion = connexion();
   $req = "INSERT INTO tableauattente(LOGIN,ROLE) VALUES(?,?)";
   $stmt= $connexion->prepare($req);
   $stmt->execute( [ $login, NULL ] );
   CloseCon($connexion);
 }

  ?>
