<!DOCTYPE html>
<html>
	<head>
		<link href="../public/css/header.css" rel="stylesheet">
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
			<?php
			  if(isset($connection)){ //Teste si la connexion utilisateur est réussi
			    echo "Connecté en tant que: "."$username"." <a onclick='deconnexion()'>Deconnexion</a>"; //Affiche le nom d'utilisateur et permet la deconnexion avec un fonction JavaScript.
			  }else{
			    echo "<a href='/MVC/view/connexion.php'><input type='button' name='connexion' value='Connexion'/></a>"; //Permettra de se connecter
			  }
			?>
	</body>
</html>

