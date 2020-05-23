var BrancardGrave = document.getElementsByClassName("patientgrave");
var BrancardLeger = document.getElementsByClassName("patientleger");

function start()
{
  var nbMedecin = readCookie('medecin');
  var nbInfirmiere = readCookie('infirmiere');
  var tempsSoigne = 180000/(nbMedecin*nbInfirmiere);
  setInterval(changeBrancardGrave,1000);
  setInterval(test,tempsSoigne);
  setInterval(DegradEtat,20000);
}

function changeBrancardGrave()
{
  var nbVictimeGrave = readCookie('nbVictimeGrave');
  var nbVictimeLeger = readCookie('nbVictimeLeger');

  for (var i=0;i<nbVictimeGrave;i++)
  {
    if(i>8){break;}
    BrancardGrave[i].src = "../public/icones/patientBrancard.png";
  }
  for (var i=0;i<nbVictimeLeger;i++)
  {
    if(i>8){break;}
    BrancardLeger[i].src = "../public/icones/patientBrancard.png";
  }
}

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


function soigne()
{
  $.ajax({
    type: 'get',
    url: '../controller/soigneController.php',
  });
  setTimeout(actualiser,1000);
}

function DegradEtat()
{
  document.cookie = "vict=true";
	$.ajax({
		type: 'get',
		url: '../controller/pmaController.php'
	});
  setTimeout(actualiser,1000);
}

function actualiser()
{
  window.location.reload();
}
