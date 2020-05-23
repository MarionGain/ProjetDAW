<!DOCTYPE html>
<html lang="fr">
  <head>
	 <?php require("../model/data.php"); ?>
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
			<tr id="test">
				<?php echo "<td><img src=\"../public/icones/camionPompier.png\" alt=\"Pompier\" id=\"camionPompier\"></td>"; ?>
				<!-- <select id="listePompier"><option>Evacuer</option></select> -->
			</tr>
			<tr>
				<td><img src="../public/icones/pompier.png" alt="Pompier" id="pompier"></td>
				<td><select id="listePompier"><option>Actions</option><option>Evacuer</option></select></td>
			</tr>

		</table>
		<table>
			<tr>
				<th>Samu</th>
			</tr>		
			<tr>
				<td><img src="../public/icones/medecin.png" alt="médecin" id="medecin"></td>
			</tr>
			<tr>
				<td><img src="../public/icones/infirmiere.png" alt="infirmière" id="infirmiere"></td>
			</tr>
			<tr>
				<td><img src="../public/icones/ambulance.png" alt="ambulance" id="ambulance"></td>
			</tr>

			</table>

			<table>
			<tr>
				<th>Policiers</th>
			</tr>
			
			<tr>
				<td><img src="../public/icones/policier.png" alt="policier" id="policier"></td>
			</tr>
			<tr>	
				<td><img src="../public/icones/voiturePolice.png" alt="voiturePolice" id="voiturePolice"></td>
				<td><select id="listePolice"><option>Actions</option><option>Surveiller la morgue</option><option>Gérer la circulation</option><option>Identifier les victimes</option></select></td>
			</tr>

</table>
<table>
			<tr>
				
				<th>PMA</th>
			</tr>
				
			<tr>
				<td><img src="../public/icones/pma.png" alt="pma" id="pma"></td>
			</tr>
		</table>
	</div>
		
  </body>
</html>
