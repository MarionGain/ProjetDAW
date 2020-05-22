<script src ="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="../public/js/Evac.js"></script>

<?php
  require_once('../Model/Simulation.php');
  if(!isset($_SESSION)){
      session_start();
  }
  if(isset($_POST['Victime']) && isset($_POST['Ambulance']) && isset($_POST['Hopital']))
  {
    foreach($_SESSION['Simulation'] -> getPMA() -> getVictimes() as $value)
    {
      if($value -> getSinus() == $_POST['Victime'])
      {
        if($value -> getAssignation() == "Attente evac")
        {
          $_SESSION['Simulation'] -> getPMA() -> supprVictime($value -> getSinus());
        }
        else{echo "Sélectionner une victime en attente d'évacuation";}
      }
    }
    foreach($_SESSION['Simulation'] -> getRessources('Hopital') as $value)
    {
      if($value -> getId() == $_POST['Hopital'])
      {
        if($value -> getnbLit() > 0)
        {
        $_SESSION['Simulation'] -> getRessource($_POST['Hopital']) -> recevoirPatient();
        }
        else{echo "sélectionner un hopital avec des lits disponible";}
      }
    }
    foreach($_SESSION['Simulation'] -> getRessources('Ambulance') as $value)
    {
      if($value -> getId() == $_POST['Ambulance'])
      {
        if($value -> getlibre() == true)
        {
          $_SESSION['Simulation'] -> getRessource($_POST['Ambulance']) -> changeLibre();
          setcookie("Ambulance",$_POST['Ambulance']);
          echo "<script>envoie();</script>";
        }
        else{echo "Sélectionner une ambulance disponible";}
      }
    }
  }
  else { echo 'Sélectionner une ambulance, un patient, et un hopital';}
  require_once('EVAC.php');
?>
