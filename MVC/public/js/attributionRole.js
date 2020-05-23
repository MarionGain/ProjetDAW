var COPGSet=false;
var DSMset=false;
var CRRAset=false;
var Trieurset=false;
var Evacset=false;
var Cosset=false;

function onload(){
  checkPlayers();
  let button = document.getElementById('bCOPG');
  button.onclick = COPG;
  button = document.getElementById('bDSM');
  button.onclick = DSM;
  button = document.getElementById('bCRRA');
  button.onclick = CRRA;
  button = document.getElementById('bTrieur');
  button.onclick = Trieur;
  button = document.getElementById('bEvac');
  button.onclick = Evac;
  button = document.getElementById('bCos');
  button.onclick = COS;
  button = document.getElementById('LaunchGame');
  button.onclick = launch;
  button = document.getElementById('Reset');
  button.onclick = reset;
  setInterval(checkPlayers, 5000);

}

function checkPlayerExiste(name){
  let connectes= document.getElementById("JoueursCo").innerHTML;
  let tabConnectes = connectes.split('-');
  let existe = false;
  if(name != ""){
    tabConnectes.forEach((item, i) => {
      if(item == name){
        existe = true;
      }
    });
  }
  return existe;
}


function checkPlayerUsed(name, cas){
    let rez = true;
    let COPG =  document.getElementById('pseudoCOPG').value;
    let DSM =  document.getElementById('pseudoDSM').value;
    let CRRA =  document.getElementById('pseudoCRRA').value;
    let Trieur =  document.getElementById('pseudoTrieur').value;
    let Evac =  document.getElementById('pseudoEvac').value;
    let COS =  document.getElementById('pseudoCOS').value;
    switch (cas) {
      case 1:
        if(name == DSM || name == CRRA || name == Trieur || name == Evac || name == COS ){
          rez = false;
        }
      break;
      case 2:
        if(name == COPG || name == CRRA || name == Trieur || name == Evac || name == COS ){
          rez = false;
        }
      break;
      case 3:
        if(name == DSM || name == COPG || name == Trieur || name == Evac || name == COS ){
          rez = false;
        }
      break;
      case 4:
        if(name == DSM || name == CRRA || name == COPG || name == Evac || name == COS ){
          rez = false;
        }
      break;
      case 5:
        if(name == DSM || name == CRRA || name == Trieur || name == COPG || name == COS ){
          rez = false;
        }
      break;
      case 6:
        if(name == DSM || name == CRRA || name == Trieur || name == Evac || name == COPG ){
          rez = false;
        }
      break;
      default:
      rez = false;
      break;
    }
    return rez;
}

function ajaxCallCOPG(ps,ro){
  $.ajax({
       url : '../../view/AttribuerRole.php',
       type : 'GET', // Le type de la requête HTTP, ici devenu POST
       data : 'pseudo=' + ps + '&role=' + ro, // On fait passer nos variables, exactement comme en GET, au script more_com.php
       dataType : 'text',
       success : function(text){ // code_html contient le HTML renvoyé
         document.getElementById('errorCOPG').innerHTML = text;
         COPGSet=true;
       }
    });
}


function COPG(){
  let name = document.getElementById('pseudoCOPG').value;
  if(checkPlayerExiste(name)){
    if(checkPlayerUsed(name,1)){
      ajaxCallCOPG(name,'COPG');
    }
    else {
      document.getElementById('errorCOPG').innerHTML = "Ce joueur est déjà attribué à un autre rôle ! ";
    }
  }
  else {
    document.getElementById('errorCOPG').innerHTML = "Ce joueur n'est pas connecté ! ";
  }
}

function DSM(){
  let name = document.getElementById('pseudoDSM').value;
  if(checkPlayerExiste(name)){
    if(checkPlayerUsed(name,2)){
      ajaxCallDSM(name,'DSM');
    }
    else {
      document.getElementById('errorDSM').innerHTML = "Ce joueur est déjà attribué à un autre rôle ! ";
    }
  }
  else {
    document.getElementById('errorDSM').innerHTML = "Ce joueur n'est pas connecté ! ";
  }
}

function ajaxCallDSM(ps,ro){
  $.ajax({
       url : '../../view/AttribuerRole.php',
       type : 'GET', // Le type de la requête HTTP, ici devenu POST
       data : 'pseudo=' + ps + '&role=' + ro, // On fait passer nos variables, exactement comme en GET, au script more_com.php
       dataType : 'text',
       success : function(text){ // code_html contient le HTML renvoyé
         document.getElementById('errorDSM').innerHTML = text;
         DSMset=true;
       }
    });
}

function CRRA(){
  let name = document.getElementById('pseudoCRRA').value;
  if(checkPlayerExiste(name)){
    if(checkPlayerUsed(name,3)){
      ajaxCallCRRA(name,'CRRA');
    }
    else {
      document.getElementById('errorCRRA').innerHTML = "Ce joueur est déjà attribué à un autre rôle ! ";
    }
  }
  else {
    document.getElementById('errorCRRA').innerHTML = "Ce joueur n'est pas connecté ! ";
  }
}

function ajaxCallCRRA(ps,ro){
  $.ajax({
       url : '../../view/AttribuerRole.php',
       type : 'GET', // Le type de la requête HTTP, ici devenu POST
       data : 'pseudo=' + ps + '&role=' + ro, // On fait passer nos variables, exactement comme en GET, au script more_com.php
       dataType : 'text',
       success : function(text){ // code_html contient le HTML renvoyé
         document.getElementById('errorCRRA').innerHTML = text;
         CRRAset=true;
       }
    });
}

function Trieur(){
  let name = document.getElementById('pseudoTrieur').value;
  if(checkPlayerExiste(name)){
    if(checkPlayerUsed(name,4)){
      ajaxCallTrieur(name,'Trieur');
    }
    else {
      document.getElementById('errorTrieur').innerHTML = "Ce joueur est déjà attribué à un autre rôle ! ";
    }
  }
  else {
    document.getElementById('errorTrieur').innerHTML = "Ce joueur n'est pas connecté ! ";
  }
}
function ajaxCallTrieur(ps,ro){
  $.ajax({
       url : '../../view/AttribuerRole.php',
       type : 'GET', // Le type de la requête HTTP, ici devenu POST
       data : 'pseudo=' + ps + '&role=' + ro, // On fait passer nos variables, exactement comme en GET, au script more_com.php
       dataType : 'text',
       success : function(text){ // code_html contient le HTML renvoyé
         document.getElementById('errorTrieur').innerHTML = text;
         Trieurset=true;
       }
    });
}

function Evac(){
  let name = document.getElementById('pseudoEvac').value;
  if(checkPlayerExiste(name)){
    if(checkPlayerUsed(name,5)){
      ajaxCallEvac(name,'Evac');
    }
    else {
      document.getElementById('errorEvac').innerHTML = "Ce joueur est déjà attribué à un autre rôle ! ";
    }
  }
  else {
    document.getElementById('errorEvac').innerHTML = "Ce joueur n'est pas connecté ! ";
  }
}
function ajaxCallEvac(ps,ro){
  $.ajax({
       url : '../../view/AttribuerRole.php',
       type : 'GET', // Le type de la requête HTTP, ici devenu POST
       data : 'pseudo=' + ps + '&role=' + ro, // On fait passer nos variables, exactement comme en GET, au script more_com.php
       dataType : 'text',
       success : function(text){ // code_html contient le HTML renvoyé
         document.getElementById('errorEvac').innerHTML = text;
         Evacset=true;
       }
    });
}
function COS(){
  let name = document.getElementById('pseudoCOS').value;
  if(checkPlayerExiste(name)){
    if(checkPlayerUsed(name,6)){
      ajaxCallCos(name,'COS');
    }
    else {
      document.getElementById('errorCOS').innerHTML = "Ce joueur est déjà attribué à un autre rôle ! ";
    }
  }
  else {
    document.getElementById('errorCOS').innerHTML = "Ce joueur n'est pas connecté ! ";
  }
}

function ajaxCallCos(ps,ro){
  $.ajax({
       url : '../../view/AttribuerRole.php',
       type : 'GET', // Le type de la requête HTTP, ici devenu POST
       data : 'pseudo=' + ps + '&role=' + ro, // On fait passer nos variables, exactement comme en GET, au script more_com.php
       dataType : 'text',
       success : function(text){ // code_html contient le HTML renvoyé
         document.getElementById('errorCOS').innerHTML = text;
         Cosset=true;
       }
    });
}

function launch(){
  if(Cosset && Trieurset && Evacset && COPGSet && DSMset && CRRAset){
    $.ajax({
         url : '../../view/LaunchGame.php',
         type : 'GET', // Le type de la requête HTTP, ici devenu POST
         dataType : 'text',
      });
      document.location.href="../view/scenario.php";
  }
  else {
    document.getElementById("errorLaunch").innerHTML = "Tous les rôles n'ont pas été attribués !";
  }
}

function reset(){
  $.ajax({
       url : '../../view/ResetRoles.php',
       type : 'GET', // Le type de la requête HTTP, ici devenu POST
       dataType : 'text',
    });
  document.getElementById('pseudoCOPG').innerHTML = "";
  document.getElementById('pseudoDSM').innerHTML = "";
  document.getElementById('pseudoCRRA').innerHTML = "";
  document.getElementById('pseudoTrieur').innerHTML = "";
  document.getElementById('pseudoEvac').innerHTML = "";
  document.getElementById('pseudoCOS').innerHTML = "";
  document.getElementById('errorCOS').innerHTML = "";
  document.getElementById('errorTrieur').innerHTML = "";
  document.getElementById('errorCRRA').innerHTML = "";
  document.getElementById('errorDSM').innerHTML = "";
  document.getElementById('errorEvac').innerHTML = "";
  document.getElementById('errorCOPG').innerHTML = "";
  Cosset = false;
  Trieurset=false;
  Evacset=false;
  DSMset=false;
  CRRAset=false;
  COPGSet=false;

}

function checkPlayers(){
  $.ajax({
    type: 'GET',
    url: '../../view/GetJoueursConnectes.php',
    success: function(data) {
        document.getElementById("JoueursCo").innerHTML=data;
     },
    error: function() {
      checkPlayers  (); }
  });
}
