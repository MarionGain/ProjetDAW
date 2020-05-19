<script>alert("Attention");</script>
<?php
  require_once('../Model/Simulation.php');
  if(!isset($_SESSION)){
      session_start();
  }
?>
  <script>console.log($_COOKIE['Ambulance']);</script>
<?php
  $_SESSION['Simulation'] -> getRessource($_COOKIE['Ambulance']) -> changeLibre();
?>
  <script>console.log($_SESSION['Simulation'] -> getRessource($_COOKIE['Ambulance']) -> AfficheLibre());</script>
