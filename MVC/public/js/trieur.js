function start(){
	var brancardDroite = document.getElementById("brancardDroite");
	var brancardGauche = document.getElementById("brancardGauche");

	brancardDroite.addEventListener("click", function(e) {
		changeImage(e);
	});
	brancardGauche.addEventListener("click", function(e) {
		changeImage(e);
	});
}

function changeImage(e){
	e.currentTarget.src="../public/icones/patientBrancard.png";
	vueTrieur(e);
}

function vueTrieur(e){
	document.cookie = "Brancard="+e.currentTarget.id;
	var top;
	var left;
	if(e.currentTarget.id == "brancardDroite"){
		top=(screen.height)/2;
		left=(screen.width)-1200;
	}
	else {
		top=(screen.height)/2;
		left=(screen.width)-400;
	}

 	window.open("../view/Patient.php", "patient", "titlebar=yes, resizable=yes, width=300, height=300, top="+top+",left="+left);
}

function startP()
{
	var bouton = document.getElementById("bouton");
	bouton.addEventListener("click", function() {
		//closeWin();
	});
}

function closeWin() {
	setTimeout(function(){ self.close(); }, 3000);
}

function Actualiser() {
	window.location.reload();
}
