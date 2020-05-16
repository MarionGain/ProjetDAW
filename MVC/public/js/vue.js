var pompier = document.getElementById("pompier");
var camion = document.getElementById("camionPompier");
var liste = document.getElementById("listePompier");

// var bus = document.getElementById("bus");
var map = document.getElementById("map");
var morgue =  document.getElementById("morgue");
var policier = document.getElementById("policier");
var voiturePolice = document.getElementById("voiturePolice");
var listePolice = document.getElementById("listePolice");


function init() {

	pompier.addEventListener("mouseover", actionsPompier);
	policier.addEventListener("mouseover", actionsPolicier);
	liste.addEventListener("change", selection);
	listePolice.addEventListener("change", selectionPolice);
	
	// bus.style.position = "absolute";
	// bus.style.left="55%";

}

function onMapStyle(icone){
	// icone.style.width = "20px";
	icone.style.border="none";
	icone.style.padding="0px"; 
	icone.style.backgroundColor="rgba(5,64,87,0)"; 
}

function offMapStyle(icone){
	icone.style.border="inherit";
	icone.style.padding="10px"; 
	icone.style.backgroundColor="rgb(5,64,87)"; 
}


 //  function fermeture(){
 //  	window.close();
 //  }

 //  function valider(){
 //  	// alert("Votre demande a bien été prise en compte et sera traitée par le maître du jeu !");
 //  	// confirm("Le chef de la police demande 10 policiers supplémentaires. Souhaitez-vous les lui attribuer ?");
 //  	// window.close();
  	
 //  	var top=(screen.height-400)/2;
	// var left=(screen.width-400)/2;

 //  	// window.open("traitementRenfort.php", "traitementRenfort", "titlebar=yes, resizable=yes, width=400, height=400, top="+top+",left="+left);
  
 //  }