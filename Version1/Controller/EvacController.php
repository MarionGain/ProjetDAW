<script src ="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="../public/js/Evac.js"></script>
<?php
  require_once('../Model/Simulation.php');
  if(!isset($_SESSION)){
      session_start();
  }

  if(isset($_POST['bool']))
  {
    echo "ici";
    if($_COOKIE['bool']=="false")
    {
      echo "la";
      $_SESSION['Simulation'] -> getRessource($_COOKIE['Ambulance']) -> changeLibre();
    }
  }

  function TableauxVictimes()
  {
    $Victimes = $_SESSION['Simulation'] -> getPMA() -> getVictimes();
    foreach($Victimes as $value)
    {
      $id = $value -> getSinus();
      echo "<tr>";
      echo "<td>";
      echo $id;
      echo "</td>";
      echo "<td>";
      echo $value -> getEtat();
      echo "</td>";
      echo "<td>";
      echo $value -> getAssignation();
      echo "</td>";
      echo "<td>";
      echo $value -> getSexe();
      echo "</td>";
      echo "<td>";
      echo $value -> getAge();
      echo "</td>";
      echo "<td>";
      echo '<input type="radio" name="Victime" value='.$id.' >';
      echo "</td>";
      echo "</tr>";
    }
  }

  function TableauxAmbulance()
  {
    $Ambulances = $_SESSION['Simulation'] -> getRessources("Ambulance");
    foreach($Ambulances as $value)
    {
      echo "<tr>";
      echo "<td>";
      echo $value -> getNom();
      echo "</td>";
      echo "<td>";
      echo $value -> AfficheLibre();
      echo "</td>";
      echo "<td>";
      echo '<input type="radio" name="Ambulance" value='.$value -> getId().' class="Ambulance">';
      echo "</td>";
      echo "</tr>";
    }
  }

  function TableauxHopital()
  {
    $Hopital = $_SESSION['Simulation'] -> getRessources("Hopital");
    foreach($Hopital as $value)
    {
      echo "<tr>";
      echo "<td>";
      echo $value -> getNom();
      echo "</td>";
      echo "<td>";
      echo $value -> getnbLit()." Lits Disponibles";
      echo "</td>";
      echo "<td>";
      echo $value -> getDistance()." km";
      echo "</td>";
      echo "<td>";
      echo '<input type="radio" name="Hopital" value='.$value -> getId().'>';
      echo "</td>";
      echo "</tr>";
    }
  }
?>
