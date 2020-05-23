<?php

  if(!isset($_SESSION)){
      session_start();
  }

  setcookie("COPG",$_POST['COPG']);
  setcookie("DSM",$_POST['DSM']);
  setcookie("COS",$_POST['COS']);
  setcookie("EVAC",$_POST['EVAC']);
  setcookie("Trieur",$_POST['Trieur']);
  setcookie("CRRA",$_POST['CRRA']);
  setcookie("login",$_SESSION['login']);

  require_once("../view/scenario.php");

?>