function drag(param) {
	$(function(){$(param).draggable({containment:'#map'});});
}

function dragstart(icone){
	icone.addEventListener('mousedown', function(){icone.style.position="absolute";});
}

function readCookie(name) {
	var nameEQ = name + "=";
	var cookies = document.cookie.split(';');
	for(var i=0;i < cookies.length;i++) {
		var cookie = cookies[i];
		while (cookie.charAt(0)==' ') cookie = cookie.substring(1,cookie.length);
		if (cookie.indexOf(nameEQ) == 0) return cookie.substring(nameEQ.length,cookie.length);
	}
	return null;
}

function duplicate(img,nb,cell) {
	if(typeof img=='string') { img = document.getElementById(img); }
	for (var i = 1; i < nb; i++) {
		var clone = img.cloneNode(true);
		dragstart(clone);
		drag(clone);
		clone.style.position="absolute";
		cell.appendChild(clone);
	}
}

var pompier = document.getElementById('pompier');
var camionPompier = document.getElementById('camionPompier');
var medecin = document.getElementById('medecin');
var infirmiere = document.getElementById('infirmiere');
var ambulance = document.getElementById('ambulance');
var policier = document.getElementById('policier');
var voiturePolice = document.getElementById('voiturePolice');
var pma = document.getElementById('pma');

var caseCamionPompier = document.getElementById('caseCamionPompier');
var casePompier = document.getElementById('casePompier');
var caseMedecin = document.getElementById('caseMedecin');
var caseInfirmiere = document.getElementById('caseInfirmiere');
var caseAmbulance = document.getElementById('caseAmbulance');
var casePolicier = document.getElementById('casePolicier');
var caseVoiturePolice = document.getElementById('caseVoiturePolice');

var pompierCookied = readCookie("pompier");
var camionPompierCookied = readCookie("camionPompier");
var ambulanceCookied = readCookie("ambulance");
var medecinCookied = readCookie("medecin");
var infirmiereCookied = readCookie("infirmiere");
var policierCookied = readCookie("policier");
var voiturePoliceCookied = readCookie("voiturePolice");



dragstart(policier);
dragstart(pompier);
dragstart(camionPompier);
dragstart(ambulance);
dragstart(medecin);
dragstart(infirmiere);
dragstart(pma);
dragstart(voiturePolice);

drag(policier);
drag(pompier);
drag(medecin);
drag(infirmiere);
drag(ambulance);
drag(pma);
drag(camionPompier);
drag(voiturePolice);

duplicate(camionPompier,camionPompierCookied,caseCamionPompier);
duplicate(pompier,pompierCookied,casePompier);
duplicate(medecin,medecinCookied,caseMedecin);
duplicate(infirmiere,infirmiereCookied,caseInfirmiere);
duplicate(ambulance,ambulanceCookied,caseAmbulance);
duplicate(policier,policierCookied,casePolicier);
duplicate(voiturePolice,voiturePoliceCookied,caseVoiturePolice);

console.log(pompierCookied);
console.log(camionPompierCookied);
console.log(ambulanceCookied);
console.log(medecinCookied);
console.log(infirmiereCookied);
console.log(policierCookied);
console.log(voiturePoliceCookied);
