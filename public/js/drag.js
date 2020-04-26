function drag(param) {
	$(function(){$(param).draggable({containment:'#map'});
});
}

var pompier = document.getElementById('pompier');
var camionPompier = document.getElementById('camionPompier');
var medecin = document.getElementById('medecin');
var infirmiere = document.getElementById('infirmiere');
var ambubulance = document.getElementById('ambulance');
var policier = document.getElementById('policier');
var voiturePolice = document.getElementById('voiturePolice');
var pma = document.getElementById('pma');


drag(policier);
drag(pompier);
drag(medecin);
drag(infirmiere);

drag(ambulance);
drag(pma);
drag(camionPompier);
drag(voiturePolice);

