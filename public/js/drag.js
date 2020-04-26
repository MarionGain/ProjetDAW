function drag(param) {
	
	$(function(){$(param).draggable({containment:'#map'});});


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

// 	policier.addEventListener('mousedown', function(){
// 	policier.style.position="absolute";
// });

// 	pompier.addEventListener('mousedown', function(){
// 	pompier.style.position="absolute";
// });

// 	camionPompier.addEventListener('mousedown', function(){
// 	camionPompier.style.position="absolute";
// });


// 	infirmiere.addEventListener('mousedown', function(){
// 	infirmiere.style.position="absolute";
// });

function dragstart(icone){
	icone.addEventListener('mousedown', function(){icone.style.position="absolute";});

}

dragstart(policier);
dragstart(pompier);

dragstart(camionPompier);
dragstart(ambulance);




dragstart(medecin);
dragstart(infirmiere);

dragstart(pma);
dragstart(voiturePolice);

drag(pompier);
drag(medecin);
drag(infirmiere);

drag(ambulance);
drag(pma);
drag(camionPompier);
drag(voiturePolice);


