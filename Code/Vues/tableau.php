<!DOCTYPE html>
<html lang="fr">
  <head>
	 <?php require("data.php"); ?>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
	<table>
		<thead>
			<tr>
				<td>Renfort</td>
			</tr>
		</thead>
		<tr>
			<td>
				<table>
					<thead>
						<tr>
							<td>Pompiers</td>
						</tr>
					</thead>
					<tr>
					<?php
						for ($i =0; $i < $nbCamionPompier; $i++)
						{
							echo "<td><img src=\"/Icones/camionPompier1.png\" alt=\"Pompier\"></td>";
						}
					?>
					</tr>
					<tr>
					<?php
						for ($i =0; $i < $nbCamionPompier; $i++)
						{
							echo "<td><img src=\"/Icones/camionPompier2.png\" alt=\"Pompier\"></td>";
						}
					?>
					</tr>
					<tr>
					<?php
						for ($i =0; $i < $nbPompiers; $i++)
						{
							echo "<td><img src=\"/Icones/pompier2.png\" alt=\"Pompier\"></td>";
						}
					?>
					</tr>
					<tr>
					<?php
						for ($i =0; $i < $nbPompiers; $i++)
						{
							echo "<td><img src=\"/Icones/Calque 1.png\" alt=\"Pompier\"></td>";
						}
					?>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<table>
					<thead>
						<tr>
							<td>Samu</td>
						</tr>
					</thead>
					<tr>
					<?php
						for ($i =0; $i < $nbMedecin; $i++)
						{
							echo "<td><img src=\"/Icones/medecin1.png\" alt=\"medecin1\"></td>";
						}
					?>
					</tr>
					<tr>
					<?php
						for ($i =0; $i < $nbMedecin; $i++)
						{
							echo "<td><img src=\"/Icones/medecin2.png\" alt=\"medecin2\"></td>";
						}
					?>
					</tr>
					<tr>
					<?php
						for ($i =0; $i < $nbInfirmiere; $i++)
						{
							echo "<td><img src=\"/Icones/infirmière1.png\" alt=\"infirmiere\"></td>";
						}
					?>
					</tr>
					<tr>
					<?php
						for ($i =0; $i < $nbAmbulance; $i++)
						{
							echo "<td><img src=\"/Icones/camionAmbulance1.png\" alt=\"camionAmbulance1\"></td>";
						}
					?>
					</tr>
					<tr>
					<?php
						for ($i =0; $i < $nbAmbulance; $i++)
						{
							echo "<td><img src=\"/Icones/camionAmbulance2.png\" alt=\"camionAmbulance2\"></td>";
						}
					?>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<table>
					<thead>
						<tr>
							<td>Policiers</td>
						</tr>
					</thead>
					<tr>
					<?php
						for ($i =0; $i < $nbPolier; $i++)
						{
							echo "<td><img src=\"/Icones/policier1.png\" alt=\"policier1\"></td>";
						}
					?>
					</tr>
					<tr>
					<?php
						for ($i =0; $i < $nbPolier; $i++)
						{
							echo "<td><img src=\"/Icones/policier2.png\" alt=\"policier2\"></td>";
						}
					?>
					</tr>
					<tr>
					<?php
						for ($i =0; $i < $nbVoiturePolice; $i++)
						{
							echo "<td><img src=\"/Icones/voiturePolice1.png\" alt=\"voiturePolicie1\"></td>";
						}
					?>
					</tr>
					<tr>
					<?php
						for ($i =0; $i < $nbVoiturePolice; $i++)
						{
							echo "<td><img src=\"/Icones/voiturePolice2.png\" alt=\"voiturePolice2\"></td>";
						}
					?>
					</tr>
				</table>
			</td>
		</tr>
	</table>
  </body>
</html>