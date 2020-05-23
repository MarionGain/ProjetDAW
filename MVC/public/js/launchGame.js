launch();

function launch(){
  $.ajax({
       url : '../../view/LaunchGame.php',
       type : 'GET', // Le type de la requête HTTP, ici devenu POST
       dataType : 'text',
    });
  }
