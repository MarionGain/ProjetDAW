
var pompier = document.getElementById('iconePompier');
var camionPompier = document.getElementById('camionPompier');
// var medecin = document.getElementById('medecin');
// var infirmiere = document.getElementById('infirmiere');
// var ambubulance = document.getElementById('ambulance');
// var policier = document.getElementById('policier');
// var voiturePolice = document.getElementById('voiturePolice');
var pma = document.getElementById('pma');
var morgue = document.getElementById('morgue');

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
	pma.addEventListener('mouseup', placerMorgue);
}


function placerMorgue(){
	// var morgue = document.getElementById('morgue');
	if(pma.style.left != "0px"){
		onMapStyle(morgue);
		morgue.style.width = "30px";
		morgue.style.position = "absolute";

		// alert(getComputedStyle(pma).left);
		var left = parseInt(getComputedStyle(pma).left)+ 30 + "px";
		var top = parseInt(getComputedStyle(pma).top) - 30 + "px";

		// alert(left);
		morgue.style.left =left;
		// var top = getComputedStyle(pma).top;
		morgue.style.top = top;

		morgue.style.visibility = "visible";
		// morgue.style.position="fixed";
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


// var pompier = document.getElementById('iconePompier');
// var camionPompier = document.getElementById('camionPompier');
// var medecin = document.getElementById('medecin');
// var infirmiere = document.getElementById('infirmiere');
// var ambubulance = document.getElementById('ambulance');
// var policier = document.getElementById('policier');
// var voiturePolice = document.getElementById('voiturePolice');
// var pma = document.getElementById('pma');


// dragstart(policier);
dragstart(pompier);
// dragstart(medecin);
// dragstart(infirmiere);

dragstart(camionPompier);
// dragstart(ambulance);
dragstart(pma);
// dragstart(voiturePolice);

drag(policier);
drag(pompier);
// drag(medecin);
// drag(infirmiere);

// drag(ambulance);
drag(pma);
drag(camionPompier);
// drag(voiturePolice);


