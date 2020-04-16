
<!DOCTYPE html>
<html>
	<head>
		<link href="/projet/styles/header.css" rel="stylesheet">
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<header>
			<?php

			  if(isset($_SESSION['Login'])){ //Teste si la connexion utilisateur est réussi

			    ?>  <input type='button' onclick="window.location.href = '/projet/VUE/Connexion.php'" value='Deconnexion'/> <?php echo " Connecté en tant que: <span style='color: white'>".$_SESSION['Login']."</span>";  //Affiche le nom d'utilisateur et permet la deconnexion avec un fonction JavaScript.
			  }else{
			    ?>
            <input type='button' onclick="window.location.href = '/projet/VUE/Connexion.php'" value='Connexion'/> <!-- Permettra de se connecter -->
          <?php
			  }
			?>
		</header>
	</body>
</html>
