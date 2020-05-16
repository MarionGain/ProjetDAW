function onload(){
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
  checkPlayers();
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
    console.log(rez);
    return rez;
}

function ajaxCall(ps,ro){
  $.ajax({
       url : '../VUE/AttribuerRole.php',
       type : 'GET', // Le type de la requête HTTP, ici devenu POST
       data : 'pseudo=' + ps + '&role=' + ro, // On fait passer nos variables, exactement comme en GET, au script more_com.php
       dataType : 'text',
       success : function(text){ // code_html contient le HTML renvoyé
         document.getElementById('errorCOPG').innerHTML = text;
       }
    });
}


function COPG(){
  let name = document.getElementById('pseudoCOPG').value;
  if(checkPlayerExiste(name)){
    if(checkPlayerUsed(name,1)){
      ajaxCall(name,'COPG');
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
  console.log("DSM");
}

function CRRA(){
  console.log("CRRA");
}

function Trieur(){
  console.log("Trieur");
}

function Evac(){
  console.log("Evac");
}

function COS(){
  console.log("COS");
}

function launch(){
  console.log("launch");
}

function reset(){
  console.log("reset");
}

function checkPlayers(){
  $.ajax({
    type: 'GET',
    url: '../VUE/GetJoueursConnectes.php',
    success: function(data) {
        document.getElementById("JoueursCo").innerHTML=data;
     },
    error: function() {
      check(); }
  });
}
