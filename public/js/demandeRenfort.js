function initialisation(){

var top=(screen.height-200)/2;
var left=(screen.width-200)/2;

var button = document.getElementById("demandeRenfort");



button.addEventListener("click", popUp);

}

function popUp(){
	var top=(screen.height-400)/2;
	var left=(screen.width-400)/2;
	window.open("demandeRenfort.php", "demandeRenfort", "titlebar=yes, resizable=yes, width=400, height=400, top="+top+",left="+left);
}

  function fermeture(){
  	window.close();
  }

  function valider(){
  	// alert("Votre demande a bien été prise en compte et sera traitée par le maître du jeu !");
  	// confirm("Le chef de la police demande 10 policiers supplémentaires. Souhaitez-vous les lui attribuer ?");
  	// window.close();
  	
  	var top=(screen.height-400)/2;
	var left=(screen.width-400)/2;

  	window.open("traitementRenfort.php", "traitementRenfort", "titlebar=yes, resizable=yes, width=400, height=400, top="+top+",left="+left);
  
  }