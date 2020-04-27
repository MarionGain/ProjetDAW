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

var pompier = document.getElementById('pompier');
var camionPompier = document.getElementById('camionPompier');
var medecin = document.getElementById('medecin');
var infirmiere = document.getElementById('infirmiere');
var ambulance = document.getElementById('ambulance');
var policier = document.getElementById('policier');
var voiturePolice = document.getElementById('voiturePolice');
var pma = document.getElementById('pma');

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

console.log(pompierCookied);
console.log(camionPompierCookied);
console.log(ambulanceCookied);
console.log(medecinCookied);
console.log(infirmiereCookied);
console.log(policierCookied);
console.log(voiturePoliceCookied);
