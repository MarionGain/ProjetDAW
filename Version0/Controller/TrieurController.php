<?php
  require_once('../Model/Simulation.php');
  if(!isset($_SESSION)){
      session_start();
  }

  if(isset($_POST['Etat']))
  {
    TraitementFormulaire();
  }

  function TraitementFormulaire()
  {
    $Vue = $_SESSION['Simulation'] -> getVue("VueTriage");
    if($_SESSION['Brancard']=="brancardGauche")
    {
      if($_POST['Etat']=="grave"){$_SESSION['Simulation'] -> getPMA() -> ajouteVictimeUA($Vue -> getGauche());}
      if($_POST['Etat']=="leger"){$_SESSION['Simulation'] -> getPMA() -> ajouteVictimeUR($Vue -> getGauche());}
      if($_POST['Etat']=="psy"){$_SESSION['Simulation'] -> getPMA() -> ajouteVictimePsy($Vue -> getGauche());}
      if($_POST['Etat']=="mort"){$_SESSION['Simulation'] -> getPMA() -> ajouteVictimeMorte($Vue -> getGauche());}
    }
    if($_SESSION['Brancard']=="brancardDroite")
    {
      if($_POST['Etat']=="grave"){$_SESSION['Simulation'] -> getPMA() -> ajouteVictimeUA($Vue -> getDroit());}
      if($_POST['Etat']=="leger"){$_SESSION['Simulation'] -> getPMA() -> ajouteVictimeUR($Vue -> getDroit());}
      if($_POST['Etat']=="psy"){$_SESSION['Simulation'] -> getPMA() -> ajouteVictimePsy($Vue -> getDroit());}
      if($_POST['Etat']=="mort"){$_SESSION['Simulation'] -> getPMA() -> ajouteVictimeMorte($Vue -> getDroit());}
    }
  }

  function AfficheVictime()
  {
    $vue1 = $_SESSION['Simulation'] -> getVue("VueTriage");
    if($_COOKIE['Brancard']=="brancardGauche")
    {
      echo 'Description : '.$vue1 -> getGauche() -> getDescription().'<br/>La personne à '.$vue1 -> getGauche() -> getAge().' ans <br/>Il sagit d un(e) '.$vue1 -> getGauche() -> getSexe();
    }elseif($_COOKIE['Brancard']=="brancardDroite")
    {
      echo 'Description : '.$vue1 -> getDroit() -> getDescription().'<br/>La personne à '.$vue1 -> getDroit() -> getAge().' ans <br/>Il sagit d un(e) '.$vue1 -> getDroit() -> getSexe();
    }
    $_SESSION['Brancard']=$_COOKIE['Brancard'];
  }

  function AjouteVictime()
  {
    $vue1 = $_SESSION['Simulation'] -> getVue("VueTriage");
    if($_COOKIE['Brancard']=="brancardGauche")
    {
      $vue1 -> setGauche($vue1 -> getVictime());
      $vue1 -> supprVictime();
    }
    elseif($_COOKIE['Brancard']=="brancardDroite")
    {
      $vue1 -> setDroit($vue1 -> getVictime());
      $vue1 -> supprVictime();
    }
  }

?>
