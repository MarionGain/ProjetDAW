function onload(){
  setInterval(check, 5000);
  check();
}


function check(){
  $.ajax({
    type: 'GET',
    url: '../view/tableauAttente.php',
    success: function(data) {
        document.getElementById("tableau").innerHTML=data;
     },
    error: function() {
      check(); }
  });
}
