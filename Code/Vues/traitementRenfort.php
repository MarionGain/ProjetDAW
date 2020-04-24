<?php
 

session_start();
if(isset($_POST['renforts'])){
 	echo $_POST['renforts'];
}

if(isset($_POST['nombre'])){
	echo $_POST['nombre'];
}

?>




<!DOCTYPE html>
<html>
<head>
	<title>Demande de renforts</title>
	<meta charset="utf-8">
	<link href="demandeRenfort.css" rel="stylesheet"/>
	<script type="text/javascript" src="traitementRenfort.js" ></script>
</head>
<body onload="debut()">
	<h1>Une demande de renfort vous a été transmise ! </h1>
	<p>Le joueur bidule demande x nouveaux machins</p>

	<form method="post" action="traitementRenfort.php">
		<p>
			<label for="">Que souhaitez-vous faire ?</label>
			</br><select name="renforts" id="renforts">
					<option>Accepter</option>
					<option>Refuser</option>
					<option>Modifier le nombre de renforts</option>
				</select>
		</p>
		<p id="modifier">
			<label for="nombre">Veuillez sélectionner le nouveau nombre de renforts :</label>
			</br><input type="number" name="nombre" max="10" min="1">
		</p>
		<input type="submit" name="Valider" value="Traiter la demande" onclick="valider()">
		<input type="reset" name="Annuler" value="Annuler" onclick="fermeture()">
	</form>
</body>
</html>
