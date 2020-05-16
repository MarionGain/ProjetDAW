function start(){
	var brancard1 = document.getElementById("brancard1");
	var brancard2 = document.getElementById("brancard2");

	brancard1.addEventListener("click", function(e) {
		changeImage(e);
	});
	brancard2.addEventListener("click", function(e) {
		changeImage(e);
	});
}

function changeImage(e){
	e.currentTarget.src="../public/images/patientBrancard.png";
	vueTrieur(e);
}

function vueTrieur(e){
	
	var top;
	var left;
	if(e.currentTarget.id == "brancard1"){
		top=(screen.height)/2;
		left=(screen.width)-1200;
	}
	else {

		top=(screen.height)/2;
		left=(screen.width)-400;
	}

	window.open("/MVC/view/patient.php", "patient", "titlebar=yes, resizable=yes, width=300, height=300, top="+top+",left="+left);
}
