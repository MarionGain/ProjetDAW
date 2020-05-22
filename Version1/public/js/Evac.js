var time = 10;

/*window.onload=function(){
    console.log("onload");
    var quelconque=document.getElementById("Envoyer");
    quelconque.addEventListener("click", function() {
      console.log("ici");
      envoie();
    });
}*/


/*function jsp()
{
  console.log('test');
  timer = setInterval(function(){
    if(time > 0){
      --time;
      console.log(time);
    }else{
      console.log('je suis la');
      $.ajax({
        type: 'get',
        url: '../Controller/AmbulanceController.php',
      });
      console.log('ajax');
      clearInterval(timer);
      window.location.reload();
    }
  }, 1000);
}

function debut()
{
  setInterval(actualiser,15000);
}*/

function actualiser()
{
  window.location.reload();
}

/*function start()
{
  for(var i = 0;i<ambulance.lenght();i++)
  {
    if(ambulance[i].checked)
    {
      alert(ambulance[i].id);
    }
  }
  console.log("quelconque");
  setInterval(test,10000);
}*/

function envoie()
{
  document.cookie = "bool=true";
  console.log("envoie");
  setTimeout(test, 3000);
  setTimeout(actualiser, 6000);
}

function test()
{
  console.log("test");
  document.cookie = "bool=false";
  console.log(document.cookie);
}
