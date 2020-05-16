var pompier = document.getElementById("iconePompier");
var camion = document.getElementById("camionPompier");
var liste = document.getElementById("listePompier");
var map = document.getElementById("map");
var pma = document.getElementById('pma');

function initCOS(){
	
	var pompier = document.getElementById("iconePompier");
	var camion = document.getElementById("camionPompier");
	var liste = document.getElementById("listePompier");
	var map = document.getElementById("map");

	pompier.addEventListener("mouseover", actionsPompier);
	liste.addEventListener("change", selection);

}

function actionsPompier(){

	// var liste = document.createElement("select");
	// // <option>Evacuer</option><option>Jesaispas</option></select>");
	// var pompier = document.getElementById("test");
	// pompier.append(liste);
		var liste = document.getElementById("listePompier");
	if(getComputedStyle(liste).visibility=="hidden")
		liste.style.visibility="visible";
	else
		liste.style.visibility="hidden";
}



function selection(){
	var liste = document.getElementById("listePompier");
	if(liste.options.selectedIndex == 1){
		evacuer();
	}
}

function evacuer(){
	var pma = document.getElementById('pma');
	var pompier = document.getElementById("iconePompier");
	var camion = document.getElementById("camionPompier");
	var liste = document.getElementById("listePompier");
	var map = document.getElementById("map");
	var bus = document.getElementById('bus');
	if(getComputedStyle(pma).position == "absolute"){
		pompier.style.position="absolute";
		onMapStyle(pompier);
		onMapStyle(camion);
		pompier.style.left = getComputedStyle(bus).left;
		pompier.style.top = getComputedStyle(bus).top;
		camion.style.position="absolute";
		camion.style.left = getComputedStyle(bus).left;
		camion.style.top = getComputedStyle(bus).top;
		setTimeout(function() {pompier.style.left = getComputedStyle(pma).left; pompier.style.top = getComputedStyle(pma).top;camion.style.left = getComputedStyle(pma).left; camion.style.top = getComputedStyle(pma).top;}, 3000)
		setTimeout(function() {offMapStyle(pompier); offMapStyle(camion);pompier.style.position ='inherit'; camion.style.position ='inherit';}, 6000)
	}
	
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

