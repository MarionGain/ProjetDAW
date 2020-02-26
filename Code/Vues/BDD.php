<?php

function OpenCon()
{
  $dbhost = "";
  $dbuser = "";
  $dbpass = "";
  $dbname = "";

 $conn = new mysqli($dbhost, $dbuser, $dbpass,$dbname) or die("Connect failed: %s\n". $conn -> error);
  return $conn;
}

function CloseCon($conn)
 {
 $conn -> close();
 }

?>
