function onload(){
  setInterval(check, 5000);
  setInterval(checkGame, 5000);

  check();
  checkGame();
}


function check(){
  $.ajax({
    type: 'GET',
    url: '../../view/TableauAttente.php',
    success: function(data) {
        document.getElementById("tableau").innerHTML=data;
     },
    error: function() {
      check(); }
  });
}

function checkGame(){
  $.ajax({
    type: 'GET',
    url: '../../view/CheckGame.php',
    success: function(data) {
        if(data == "TRUE"){
          document.location.href="../view/scenario.php";
        }
     },
    error: function() {
      checkGame(); }
  });
}
