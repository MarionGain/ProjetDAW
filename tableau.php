<!DOCTYPE html>
<html lang="fr">
  <head>
	 <?php require("data.php"); ?>
	 <link href="../public/css/tableau.css" rel="stylesheet">
	 <script type="text/script" src="../public/js/drag.js" ></script>
   <meta charset="utf-8">
   <title></title>
  </head>
  <body>
  	<div class="tableau" id="tableau">

  		<h1>Renfort</h1>
		<table>

			<tr>
				<th>Pompiers</th>
			</tr>
			<tr>
				<td id="caseCamionPompier"><img src="../public/icones/camionPompier2.png" alt="Pompier" id="camionPompier"></td>
			</tr>
			<tr>
				<td id="casePompier"><img src="../public/icones/Calque 1.png" alt="Pompier" id="pompier"></td>
			</tr>

		</table>
		<table>
			<tr>
				<th>Samu</th>
			</tr>
			<tr>
				<td id="caseMedecin"><img src="../public/icones/medecin2.png" alt="medecin" id="medecin"></td>
			</tr>
			<tr>
				<td id="caseInfirmiere"><img src="../public/icones/infirmière1.png" alt="infirmiere" id="infirmiere"></td>
			</tr>
			<tr>
				<td id="caseAmbulance"><img src="../public/icones/camionAmbulance1.png" alt="camionAmbulance1" id="ambulance"></td>
			</tr>

			</table>

			<table>
			<tr>
				<th>Policiers</th>
			</tr>

			<tr>
				<td id="casePolicier"><img src="../public/icones/policier1.png" alt="policier1" id="policier"></td>
			</tr>
			<tr>
				<td id="caseVoiturePolice"><img src="../public/icones/voiturePolice1.png" alt="voiturePolicie1" id="voiturePolice"></td>
			</tr>

</table>
<table>
			<tr>

				<th>PMA</th>
			</tr>

			<tr>
				<td id="casePMA"><img src="../public/icones/pma.png" alt="pma" id="pma"></td>
			</tr>
		</table>
	</div>

  </body>
</html>
