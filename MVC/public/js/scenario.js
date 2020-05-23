
var COPG = readCookie('COPG');
var COS = readCookie('COS');
var DSM = readCookie('DSM');
var Trieur = readCookie('Trieur');
var EVAC = readCookie('EVAC');
var CRRA = readCookie('CRRA');
var login = readCookie('login');

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

function choixPage() {

	switch(login){

		case CRRA :{document.location.href="../view/crra.php";break;}

		case COS :{document.location.href="../view/cos.php";break;}

		case EVAC : {document.location.href="../view/evac.php";break;}

		case DSM :{document.location.href="../view/dsm.php";break;}

		case Trieur : {document.location.href="../view/trieur.php";break;}

		case COPG : {document.location.href="../view/copg.php";break;}

		case "Gamemaster" : {document.location.href="../view/copg.php";break;}
		
		default :;

	}
}