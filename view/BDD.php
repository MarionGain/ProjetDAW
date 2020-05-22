<?php

function OpenCon()
{
  $host = "localhost";
  $login = "root";
  $password = "";
  $database = "principal";

//à changer pour adapter au type de BD
try {
  $conn = new PDO('mysql:host='.$host.';dbname='.$database, $login, $password);
  //Q1 $dbh->query("INSERT INTO GROUPE VALUES(\"TP1\"),(\"TP2\"),(\"TP3\"),(\"TP4\")");
} catch (PDOException $e){
  print "ALED !!!!!!!! : ".$e->getMessage()."<br />";
  die();
}
  return $conn;
}

function CloseCon($conn)
 {
 $conn -> close();
 }

?>
