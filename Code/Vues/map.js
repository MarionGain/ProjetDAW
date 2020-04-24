function test(){



var pma = document.getElementById("PMA");



PMA.addEventListener("click", vuePMA);

}

function vuePMA(){
	var top=(screen.height-1000)/2;
	var left=(screen.width-1000)/2;
	window.open("PMA.php", "PMA", "titlebar=yes, resizable=yes, width=1000, height=1000, top="+top+",left="+left);
}

 //  function fermeture(){
 //  	window.close();
 //  }

 //  function valider(){
 //  	// alert("Votre demande a bien été prise en compte et sera traitée par le maître du jeu !");
 //  	// confirm("Le chef de la police demande 10 policiers supplémentaires. Souhaitez-vous les lui attribuer ?");
 //  	// window.close();
  	
 //  	var top=(screen.height-400)/2;
	// var left=(screen.width-400)/2;

 //  	// window.open("traitementRenfort.php", "traitementRenfort", "titlebar=yes, resizable=yes, width=400, height=400, top="+top+",left="+left);
  
 //  }