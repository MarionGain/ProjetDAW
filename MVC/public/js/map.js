
var bus = document.getElementById("bus");
var map = document.getElementById("map");

function initMap(){
	
	bus = document.getElementById("bus");
 	map = document.getElementById("map");
	positionBus();
	window.addEventListener("resize", positionBus);

}

//Modifie la position du bus au redimensionnement de la page
function positionBus(){

	bus.style.position = "absolute";
	var left =  parseInt(getComputedStyle(map).width)/2;
	left += (map.offsetLeft);
	bus.style.left = left+"px";
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