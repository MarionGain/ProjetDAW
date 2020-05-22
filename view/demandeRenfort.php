<!DOCTYPE html>
<html>
<head>
	<title>Demande de renforts</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../public/css/demandeRenfort.css" />
	<script type="text/javascript" src="../public/js/demandeRenfort.js" ></script>
</head>
<body>
	<h1>Formulaire de demande de renforts</h1>
	<p>Le formulaire suivant vous permet d'effectuer une demande de renforts.</p>

	<form method="post" action="demandeRenfort.php">
		<p>
			<label for="">Quel type de renforts souhaitez-vous ?</label>
			</br><select name="renforts">
					<option>Pompiers</option>
					<option>Policiers</option>
					<option>Médecins</option>
					<option>Infirmiers</option>
					<option>Ambulances</option>
					<option>Camion de pompiers</option>
					<option>Voiture de police</option>
				</select>
		</p>
		<p>
			<label for="nombre">Veuillez sélectionner le nombre de renforts :</label>
			</br><input type="number" name="nombre" max="10" min="1">
		</p>
		<input type="submit" name="Valider" value="Envoyer la demande" onclick="valider()">
		<input type="reset" name="Annuler" value="Annuler" onclick="fermeture()">
	</form>
</body>
</html>
