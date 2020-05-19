<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8" />
    <link href="../public/css/chat.css" rel="stylesheet">
   <script type="text/javascript" src="../public/js/chat.js" ></script>
</head>
<body onload="init()">
					
		
	<?php
		$tableau="<div class='tab'
					<table class=\"chef\">
						<caption>Joueurs connectés</caption>
						<tr>
							<td id='cellule'><figure><img src=\"../public/icones/chef_police.png\"id=\"cellule\"/><figcaption>Chef de la Police</figcaption></figure></td>
							
						</tr>
						<tr>
							<td id='cellule'><figure><img src=\"../public/icones/chef_pompier.png\"/><figcaption>Chef des pompiers</figcaption></figure></td>
							
						</tr>
						<tr>
							<td><figure><img src=\"../public/icones/DSM2.png\"/><figcaption>DSM</figcaption></figure></td>
							
						</tr>
						<tr>
							<td><figure><img src=\"../public/icones/DSM3.png\"/><figcaption>EVAC</figcaption></figure></td>
							
						</tr>
						<tr>
							<td><figure><img src=\"../public/icones/DSM4.png\"/><figcaption>Trieur</figcaption></figure></td>
							
						</tr>

						</table>
					</div>";

	    $chat="<div id=\"chat\" class=\"chat\">
	    			<nav class=\"menuChat\">
	    				<ul>
			    			<li><img src='../public/icones/fermer.png' class=\"icone\" id=\"fermer\"/></li>
			    			<li><img src='../public/icones/reduire.png' class=\"icone\" id=\"reduire\"/></li>
		    			</ul>
		    		</nav>
	    			<form method=\"post\" action=\"chat.php\" id=\"formulaire\">
	    				<textarea ></textarea>
	    			</form>
	    		</div>";
	?>

</body>
</html>