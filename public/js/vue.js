var pompier = document.getElementById("pompier");
var liste = document.getElementById("listePompier");
var pma = document.getElementById("pma");
var bus = document.getElementById("bus");
var map = document.getElementById("map");
function init() {

	pompier.addEventListener("mouseover", actionsPolicier);
	// pompier.addEventListener("mouseout", actionsPolicier);
	liste.addEventListener("change", selection)



bus.style.position = "absolute";
// alert(getComputedStyle(map).width);
// alert("coucou");
bus.style.left="800px";
// bus.style.left = (getComputedStyle(map).width)/2;
// bus.style.top = (getComputedStyle(map).height)/2;
pma.addEventListener("click", vuePMA);


}

function actionsPolicier(){

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
	if(liste.options.selectedIndex == 0){
		evacuer();
	}
}

function evacuer(){
	if(getComputedStyle(pma).left != "0px"){
		pompier.style.position="absolute";
		pompier.style.left = getComputedStyle(bus).left;
		pompier.style.top = getComputedStyle(bus).top;
		setTimeout(function() {pompier.style.left = getComputedStyle(pma).left; pompier.style.top = getComputedStyle(pma).top;}, 3000)
		setTimeout(function() {pompier.style.position ='inherit';}, 6000)
	}
	
}



function vuePMA(){
	var top=(screen.height-1000)/2;
	var left=(screen.width-1000)/2;
	window.open("PMA.php", "PMA", "titlebar=yes, resizable=yes, width=1000, height=1000, top="+top+",left="+left);
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