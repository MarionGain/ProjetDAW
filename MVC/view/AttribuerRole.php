<?php
require('../model/db.php');
if(isset($_GET['pseudo']) && isset($_GET['role'])){
  insert_role($_GET['pseudo'], $_GET['role']);
  /*
  $verif = requete_and_return('SELECT role FROM ROLE WHERE login="'.$_GET['pseudo']'"');
  $test = true;
  while ($data = $verif->fetch()){
    if($data['role'] != $_GET['role']){
      $test = false;
    }
  }
  if($test){*/
    echo "Attribution réussie";
  /*}
  else {
    echo "Rôle ou pseudo incorrect";
  }*/
}
else {
    echo "Rôle ou pseudo incorrect";
}
 ?>
