var pompier = document.getElementById("pompier");
var camion = document.getElementById("camionPompier");
var liste = document.getElementById("listePompier");
var pma = document.getElementById("pma");
var bus = document.getElementById("bus");
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

	// alert(getComputedStyle(map).width);

bus.style.position = "absolute";
// alert(getComputedStyle(map).width);
// alert("coucou");
bus.style.left="55%";
// bus.style.left = (getComputedStyle(map).width)/2;
// bus.style.top = (getComputedStyle(map).height)/2;
pma.addEventListener("click", vuePMA);
setInterval(DegradEtat,2000);
setInterval(Envoie,20000);
}

function Envoie()
{
  $.ajax({
    type: 'get',
    url: '../Controller/DSMController.php',
  });
	console.log("Envoie");
}

function DegradEtat()
{
	$.ajax({
		type: 'get',
		url: '../Controller/DegradEtatController.php'
	});
	console.log("DegradEtat");
}

function actionsPompier(){

	// var liste = document.createElement("select");
	// // <option>Evacuer</option><option>Jesaispas</option></select>");
	// var pompier = document.getElementById("test");
	// pompier.append(liste);
	if(getComputedStyle(liste).visibility=="hidden")
		liste.style.visibility="visible";
	else
		liste.style.visibility="hidden";
}



function selection(){
	if(liste.options.selectedIndex == 1){
		evacuer();
	}
}

function evacuer(){
	if(getComputedStyle(pma).left != "0px"){
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

function vuePMA(){
	var top=(screen.height-1000)/2;
	var left=(screen.width-1000)/2;
	window.open("PMA.php", "PMA", "titlebar=yes, resizable=yes, width=1000, height=1000, top="+top+",left="+left);
}


function actionsPolicier (){

	if(getComputedStyle(listePolice).visibility=="hidden"){
		// listePolice.style.position = "relative";
		// listePolice.style.float = "left";
		listePolice.style.visibility="visible";
	}

	else{

		listePolice.style.visibility="hidden";
	}


}

function selectionPolice(){
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
	if(getComputedStyle(morgue).left != "0px"){

		policier.style.position="absolute";
		onMapStyle(policier);

		policier.style.left = getComputedStyle(morgue).left;
		policier.style.top = getComputedStyle(morgue).top;
		alert("Le policier surveille la morgue");
	}
}


function circulation(){

	alert("Veuillez glisser et déposer le policier sur l'axe que vous souhaitez qu'il surveille");

	// alert("Le policier surveille cet axe");
}

function identification(){
if(getComputedStyle(pma).left != "0px"){

		var left = parseInt(getComputedStyle(pma).left) -30 + "px";
		var top = getComputedStyle(pma).top;

		policier.style.position="absolute";
		onMapStyle(policier);

		policier.style.left = left;
		policier.style.top = top;
		alert("Le policier identifie les victimes qui arrivent au PMA");
	}
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
