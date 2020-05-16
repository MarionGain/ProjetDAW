<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script  type="text/javascript" src="../public/js/AttributionRole.js"></script>
  </head>
  <body onload="onload()">
    <p id="JoueursCo"></p>
    <div id="COPG">
      <label for="COPG">COPG</label> :
      <input type="text" name="COPG" id="pseudoCOPG" required>
      <span id="errorCOPG"></span>
      <button id="bCOPG" >Envoyer COPG</button>
    </div>
    <br>
    <div id="DSM">
      <label for="DSM">DSM</label> :
      <input type="text" name="DSM" id="pseudoDSM" required>
      <span id="errorDSM"></span>
      <button id="bDSM" >Envoyer DSM</button>
    </div>
    <br>
    <div id="CRRA">
      <label for="CRRA">CRRA</label> :
      <input type="text" name="CRRA" id="pseudoCRRA" required>
      <span id="errorCRRA"></span>
      <button id="bCRRA" >Envoyer CRRA</button>
    </div>
     <br>
    <div id="Trieur">
      <label for="Trieur">Trieur</label> :
      <input type="text" name="Trieur" id="pseudoTrieur" required>
      <span id="errorTrieur"></span>
      <button id="bTrieur" >Envoyer Trieur</button>
    </div>
    <br>
    <div id="Evac">
      <label for="Evac">Evac</label> :
      <input type="text" name="Evac" id="pseudoEvac" required>
      <span id="errorEvac"></span>
      <button id="bEvac" >Envoyer Evac</button>
    </div>
    <br>
    <div id="COS">
      <label for="COS">COS</label> :
      <input type="text" name="COS" id="pseudoCOS" required>
      <span id="errorCOS"></span>
      <button id="bCos" >Envoyer COS</button>
    </div>
    <br>
    <button id="LaunchGame" >Lancer la partie</button>

    <button id="Reset" >Reset</button>


  </body>
</html>
