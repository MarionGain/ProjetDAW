function jesaispasmoi(param) {
	$(function(){$(param).draggable({containment:'#map'});
});
}

var pompier = document.getElementsByClassName('pompiers');
var camionPompier = document.getElementsByClassName('camionPompiers');
var medecin = document.getElementsByClassName('medecins');
var infirmiere = document.getElementsByClassName('infirmieres');
var ambubulance = document.getElementsByClassName('ambulances');
var policier = document.getElementsByClassName('policiers');
var voiturePolice = document.getElementsByClassName('voiturePolices');

for (var i=0; i<pompier.length;i++){
	var name = "#"+pompier[i].id;
	jesaispasmoi(name);
}

for (var i = 0; i < camionPompier.length; i++) {
	var name = "#"+camionPompier[i].id;
	jesaispasmoi(name);
}

for (var i = 0; i < medecin.length; i++) {
	var name = "#"+medecin[i].id;
	jesaispasmoi(name);
}

for (var i = 0; i < infirmiere.length; i++) {
	var name = "#"+infirmiere[i].id;
	jesaispasmoi(name);
}

for (var i = 0; i < ambubulance.length; i++) {
	var name = "#"+ambubulance[i].id;
	jesaispasmoi(name);
}

for (var i = 0; i < policier.length; i++) {
	var name = "#"+policier[i].id;
	jesaispasmoi(name);
}

for (var i = 0; i < voiturePolice.length; i++) {
	var name = "#"+voiturePolice[i].id;
	jesaispasmoi(name);
}
