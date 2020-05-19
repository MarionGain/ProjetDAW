var tableau = document.getElementById("tableau");

function start()
{
  setInterval(test,10000);
}

function test()
{
  $.ajax({
    type: 'get',
    url: '../Controller/SoigneController.php',
  });
  window.location.reload();
}
