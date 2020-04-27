function drag(param) {
	
	$(function(){$(param).draggable({containment:'#map'});});


}


function dragstart(icone){
	icone.addEventListener('mousedown', function(){
		icone.style.border="none"; 
		icone.style.padding="0px"; 
		icone.style.backgroundColor="rgba(5,64,87,0)"; 
		icone.style.position="absolute"; 
		if(icone.id=="pma"){
			icone.style.maxWidth="100px";
			icone.style.maxHeight="100px";
		}
			

		else 
		icone.style.width="30px";
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


dragstart(policier);
dragstart(pompier);
dragstart(medecin);
dragstart(infirmiere);

dragstart(camionPompier);
dragstart(ambulance);
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


