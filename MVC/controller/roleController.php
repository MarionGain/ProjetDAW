<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script  type="text/javascript" src="../public/js/launchGame.js"></script>
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
