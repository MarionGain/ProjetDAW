<!DOCTYPE html>
<html lang="fr">
  <head>
	 <?php require("../model/data.php"); ?>
	 <link href="../public/css/tableau.css" rel="stylesheet">
	 <script type="text/script" src="../public/js/draganddrop.js" ></script>
   <meta charset="utf-8">
   <title></title>
  </head>
  <body>
  	<div class="tableau">

  		<h1>Victime</h1>
		<table>
			
			<tr>
				<th>Pompiers</th>
			</tr> 
			<tr>
				<?php
					echo "<td><img src=\"../public/icones/camionPompier2.png\" alt=\"Pompier\"></td>";
				?>
			</tr>
			<tr>
				<?php
					echo "<td><img src=\"../public/icones/Calque 1.png\" alt=\"Pompier\"></td>";
				?>
			</tr>

		</table>
		<table>
			<tr>
				<th>Samu</th>
			</tr>		
			<tr>
				<?php
					echo "<td><img src=\"../public/icones/medecin2.png\" alt=\"medecin2\"></td>";
				?>
			</tr>
			<tr>
				<?php
					echo "<td><img src=\"../public/icones/infirmière1.png\" alt=\"infirmiere\"></td>";
				?>
			</tr>
			<tr>
				<?php
					echo "<td><img src=\"../public/icones/camionAmbulance1.png\" alt=\"camionAmbulance1\"></td>";
				?>
			</tr>

			</table>

			<table>
			<tr>
				<th>Policiers</th>
			</tr>
			
			<tr>
				<?php
					echo "<td><img src=\"../public/icones/policier1.png\" alt=\"policier1\"></td>";
				?>
			</tr>
			<tr>
				<?php
					echo "<td><img src=\"../public/icones/voiturePolice1.png\" alt=\"voiturePolicie1\"></td>";
				?>
			</tr>

</table>
<table>
			<tr>
				
				<th>PMA</th>
			</tr>
				
			<tr>
				<?php
					echo "<td><img src=\"../public/icones/pma.png\" alt=\"pma\" id=\"PMA\"></td>";
				?>
			</tr>
		</table>
	</div>
		
  </body>
</html>
