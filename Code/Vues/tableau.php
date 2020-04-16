<!DOCTYPE html>
<html lang="fr">
  <head>
	 <?php require("data.php"); ?>
	 <link href="tableau.css" rel="stylesheet">
	 <script type="text/script" src="draganddrop.js" ></script>
   <meta charset="utf-8">
   <title></title>
  </head>
  <body>
  	<div class="tableau">

  		<h1>Renfort</h1>
		<table>
			
			<tr>
				<th>Pompiers</th>
			</tr> 
			<tr>
				<?php
					echo "<td><img src=\"Icones/camionPompier2.png\" alt=\"Pompier\"></td>";
				?>
			</tr>
			<tr>
				<?php
					echo "<td><img src=\"Icones/Calque 1.png\" alt=\"Pompier\"></td>";
				?>
			</tr>

		</table>
		<table>
			<tr>
				<th>Samu</th>
			</tr>		
			<tr>
				<?php
					echo "<td><img src=\"Icones/medecin2.png\" alt=\"medecin2\"></td>";
				?>
			</tr>
			<tr>
				<?php
					echo "<td><img src=\"Icones/infirmière1.png\" alt=\"infirmiere\"></td>";
				?>
			</tr>
			<tr>
				<?php
					echo "<td><img src=\"Icones/camionAmbulance1.png\" alt=\"camionAmbulance1\"></td>";
				?>
			</tr>

			</table>

			<table>
			<tr>
				<th>Policiers</th>
			</tr>
			
			<tr>
				<?php
					echo "<td><img src=\"Icones/policier1.png\" alt=\"policier1\"></td>";
				?>
			</tr>
			<tr>
				<?php
					echo "<td><img src=\"Icones/voiturePolice1.png\" alt=\"voiturePolicie1\"></td>";
				?>
			</tr>

</table>
<table>
			<tr>
				
				<th>PMA</th>
			</tr>
				
			<tr>
				<?php
					echo "<td><img src=\"Icones/pma.png\" alt=\"pma\"></td>";
				?>
			</tr>
		</table>
	</div>
		
  </body>
</html>
