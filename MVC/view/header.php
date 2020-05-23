<!DOCTYPE html>
<html>
	<head>
		<link href="../public/css/header.css" rel="stylesheet">
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
			<?php
			  if(isset($_SESSION['login'])){ //Teste si la connexion utilisateur est réussi
			    echo "<p>Connecté en tant que : ".$_SESSION['login']."</br><a onclick='deconnexion()''><input type='button' name='connexion' value='Déconnexion'/></a></p>"; //Affiche le nom d'utilisateur et permet la deconnexion avec un fonction JavaScript.
			  }
			  else{
			    echo "<a href='../view/connexion.php'><input type='button' name='connexion' value='Connexion'/></a>"; //Permettra de se connecter
			  }
			?>
	</body>
</html>

