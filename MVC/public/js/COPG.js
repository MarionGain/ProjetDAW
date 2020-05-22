// var bus = document.getElementById("bus");
var map = document.getElementById("map");
var morgue =  document.getElementById("morgue");
var policier = document.getElementById("policier");
var voiturePolice = document.getElementById("voiturePolice");
var listePolice = document.getElementById("listePolice");

function initCOPG(){

	var policier = document.getElementById("policier");
	var voiturePolice = document.getElementById("voiturePolice");
	var listePolice = document.getElementById("listePolice");

	policier.addEventListener("mouseover", actionsPolicier);
	listePolice.addEventListener("change", selectionPolice);
}


function actionsPolicier (){

	var listePolice = document.getElementById("listePolice");
	if(getComputedStyle(listePolice).visibility=="hidden"){
		// listePolice.style.position = "relative";
		// listePolice.style.float = "left";
		listePolice.style.visibility="visible";
	}

	else {
		listePolice.style.visibility="hidden";
	}
}

function selectionPolice(){
	
	var listePolice = document.getElementById("listePolice");
	if(listePolice.options.selectedIndex == 1){
		surveillerMorgue();
	}


	else if (listePolice.options.selectedIndex == 2){
		circulation();
	}
	else if (listePolice.options.selectedIndex == 3){
		identification();
	}
}

function surveillerMorgue(){

	var map = document.getElementById("map");
	var morgue =  document.getElementById("morgue");
	var policier = document.getElementById("policier");
	if(getComputedStyle(morgue).position == "absolute"){

		policier.style.position="absolute";
		onMapStyle(policier);

		policier.style.left = getComputedStyle(morgue).left;
		policier.style.top = getComputedStyle(morgue).top;
		alert("Le policier surveille la morgue");
	}

	else {
		alert("Le policier ne peut pas aller surveiller la morgue, car celle-ci n'est pas placée sur la map !");
	}
}

function circulation(){

	var policier = document.getElementById("policier");
	alert("Veuillez glisser et déposer le policier sur l'axe que vous souhaitez qu'il surveille");

	// alert("Le policier surveille cet axe");
}

function identification(){

	var policier = document.getElementById("policier");
	var map = document.getElementById("map");
	var morgue =  document.getElementById("morgue");

	if(getComputedStyle(pma).position == "absolute"){

		var left = parseInt(getComputedStyle(pma).left) -30 + "px";
		var top = getComputedStyle(pma).top;

		policier.style.position="absolute";
		onMapStyle(policier);

		policier.style.left = left;
		policier.style.top = top;
		alert("Le policier identifie les victimes qui arrivent au PMA");
	}

	else {
		alert("Le policier ne peut pas aller identifier les victimes, car le PMA n'est pas encore placé sur la map !");
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

