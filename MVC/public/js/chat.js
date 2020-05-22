function initChat(){

var fermer = document.getElementById("fermer");
var reduire = document.getElementById("reduire");
var pompier = document.getElementById("pompier");

var COPG = document.getElementById("COPG");
var DSM = document.getElementById("DSM");
var trieur = document.getElementById("trieur");
var EVAC = document.getElementById("EVAC");
var chat = document.getElementById("chat");

pompier.addEventListener("click", afficheChat);
COPG.addEventListener("click", afficheChat);
DSM.addEventListener("click", afficheChat);
trieur.addEventListener("click", afficheChat);
EVAC.addEventListener("click", afficheChat);

fermer.addEventListener("mouseover", changeIcone);
fermer.addEventListener("mouseleave", changeIcone);

reduire.addEventListener("mouseover", changeIconeReduire);
reduire.addEventListener("mouseleave", changeIconeReduire);


fermer.addEventListener("click", fermeture);
reduire.addEventListener("click", reduction);

}

function afficheChat(){

	var chat = document.getElementById("chat");
	chat.style.visibility = "visible";
	formulaire.style.visibility = "visible";
}

function changeIcone(){

	
	if(fermer.getAttribute("src") == "../public/icones/fermerCroix.png"){

		fermer.src="../public/icones/fermer.png";
	}
	else {
		fermer.src="../public/icones/fermerCroix.png";
	}

}

function changeIconeReduire(){

	if(reduire.getAttribute("src") == "../public/icones/reduireTiret.png"){

		reduire.src="../public/icones/reduire.png";
	}
	else {
		reduire.src="../public/icones/reduireTiret.png";
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