var quelconque=document.getElementById("Envoyer");
var ambulance=document.getElementsByClassName("Ambulance");
console.log(quelconque);
var time = 10;
function jsp()
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
}

function actualiser()
{
  window.location.reload();
}



function start()
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
}

function test()
{
  $.ajax({
    type: 'get',
    url: '../Controller/AmbulanceController.php',
  });
  window.location.reload();
}
