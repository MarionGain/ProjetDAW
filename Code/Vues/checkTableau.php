<?php
  require_once('BDD.php');
  $bdd = OpenCon();
  $result = $bdd->query('SELECT * FROM ROLE');
  //faire tableau
 ?>
