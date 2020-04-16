
function verifie_champs_connexion() {
if( verifLogin() &&  verifPassword() )
  {
      return true;
  }
else
  {
    return false;
  }
}

function verifie_champs_inscription() {
if( verifLogin() && verifPassword() && verifMail() )
  {
      return true;
  }
  else
    {
      return false;
    }
}


function verifLogin() {
  var champ = document.getElementById("Login");
  var erreur = document.getElementById("MessageErreurLogin");


  var ok = false ;

  if( champ.value =="")
    {
      champ.style.background="red";
      erreur.innerHTML ="Le Login est vide";
    }

  else
    {
      if(champ.value.length<5 || champ.value.length>20)
        {
          champ.style.background="orange";
            erreur.innerHTML =" Le Login doit contenir entre 5 et 20 caractères";
        }
      else
        {
          champ.style.background="green";
            erreur.innerHTML="<br/>"
          ok = true;
        }
    }
    return ok;
}

function verifPassword() {
  var champ =document.getElementById("Password");
  var erreur = document.getElementById("MessageErreurPassword");
  var ok = false;

  if( champ.value =="")
    {
      erreur.innerHTML ="Le Mot de passe est vide";
      champ.style.background="red";
    }

  else
    {
      if(champ.value.length<5 || champ.value.length>20)
        {
          champ.style.background="orange";
          erreur.innerHTML ="Le Mot de passe doit contenir entre 5 et 20 caractères";
        }
      else
        {
          champ.style.background="green";
          erreur.innerHTML="<br/>"
          ok = true;
        }
    }
  return ok;
}

function verifMail() {
  var champ = document.getElementById("Mail");
  var erreur = document.getElementById("MessageErreurMail");
  var ok = false ;

  if( champ.value =="")
    {
      erreur.innerHTML ="Le Mail est vide";
      champ.style.background="red";
    }

  else
    {
      if(champ.value.length<10 || champ.value.length>50)
        {
          champ.style.background="orange";
          erreur.innerHTML ="Le mail doit contenir entre 10 et 50 caractères";
        }
      else
        {
          if (!(/^[a-zA-Z0-9]+([\.\_\-][a-zA-Z0-9]+)*@[a-z0-9._-]+\.[a-z]{2,6}$/.test(champ.value)))
            {
                erreur.innerHTML ="Adresse e-mail invalide !";
                champ.style.background="orange";
            }
          else
            {
              champ.style.background="green";
              erreur.innerHTML="<br/>"
              ok = true;
            }
        }
    }
    return ok;
}
