


function init(){


var fermer = document.getElementById("fermer");
var reduire = document.getElementById("reduire");
var cellule = document.getElementById("cellule");
var chat = document.getElementById("chat");

cellule.addEventListener("click", function (){OuvrirPopup('chat.php','menu','width=200, height=100, bottom=10, right=10')});
cellule.addEventListener("click", afficheChat);

fermer.addEventListener("mouseover", changeIcone);
fermer.addEventListener("mouseleave", changeIcone);

reduire.addEventListener("mouseover", changeIconeReduire);
reduire.addEventListener("mouseleave", changeIconeReduire);


fermer.addEventListener("click", fermeture);
reduire.addEventListener("click", reduction);

}

function OuvrirPopup(page, nom, option) {
  window.open(page, nom, option);
}


function afficheChat(){
	var chat = document.getElementById("chat");
	chat.style.visibility = "visible";
	formulaire.style.visibility = "visible";
}

function changeIcone(){

	
	if(fermer.getAttribute("src") == "Icones/fermerCroix.png"){

		fermer.src="Icones/fermer.png";
	}
	else {
		fermer.src="Icones/fermerCroix.png";
	}

}

function changeIconeReduire(){

	if(reduire.getAttribute("src") == "Icones/reduireTiret.png"){

		reduire.src="Icones/reduire.png";
	}
	else {
		reduire.src="Icones/reduireTiret.png";
	}
}


function reduction(){

	var chat = document.getElementById("chat");
	var formulaire = document.getElementById("formulaire");
	if(window.getComputedStyle(formulaire).getPropertyValue("visibility") == "visible"){
		formulaire.style.visibility = "hidden";
		
		chat.style.height = "45px";
		chat.style.marginTop="120%";
		// chat.style.marginBottom = "0%";
		document.getElementById("footer").style.marginTop="0%";

	}

	else {

		formulaire.style.visibility = "visible";
		chat.style.height = "400px";
		chat.style.marginTop= "5%";
		document.getElementById("footer").style.marginTop="30px";
	}
	
}

function fermeture(){

	var chat = document.getElementById("chat");
	chat.style.visibility = "hidden";
	formulaire.style.visibility = "hidden";

}