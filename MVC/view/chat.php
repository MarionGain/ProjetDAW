<?php
	if(!isset($_SESSION)){
    	session_start();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8" />
    <link href="../public/css/chat.css" rel="stylesheet">
   <script type="text/javascript" src="../public/js/chat.js" ></script>
</head>
<body onload="initChat()">
		<?php
            require_once('../model/dbchat.php');
        ?>	
		
	<?php
		$tableau="<div class='tab'
					<table class=\"chef\">
						<caption>Joueurs connectés</caption>
						<tr>
							<td id='COPG'><figure><img src=\"../public/icones/chef_police.png\"id='COPG'/><figcaption>Chef de la Police</figcaption></figure></td>
							
						</tr>
						<tr>
							<td><figure><img src=\"../public/icones/chef_pompier.png\"id='pompier'/><figcaption>Chef des pompiers</figcaption></figure></td>
							
						</tr>
						<tr>
							<td id='CRRA'><figure><img src=\"../public/icones/CRRA.png\"id='CRRA'/><figcaption>CRRA</figcaption></figure></td>
							
						</tr>

						<tr>
							<td id='DSM'><figure><img src=\"../public/icones/DSM.png\"id='DSM'/><figcaption>DSM</figcaption></figure></td>
							
						</tr>
						<tr>
							<td id='EVAC'><figure><img src=\"../public/icones/EVAC.png\"id='EVAC'/><figcaption>EVAC</figcaption></figure></td>
							
						</tr>
						<tr>
							<td id='Trieur'><figure><img src=\"../public/icones/trieur.png\"id='trieur'/><figcaption>Trieur</figcaption></figure></td>
							
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
	    			<form method=\"post\" action=\"/MVC/view/VUE1.php\"id=\"formulaire\">
	    				<div class=\"div_messages\">";
	  
			if(isset($_POST['message']) && $_POST["message"]!='')
			{
				ajout_individuel($_SESSION['login'], $_POST['destinataire'], $_POST['message']);
			}

			$res = requete_and_returnMessage('SELECT EXPEDITEUR, DESTINATAIRE, MESSAGE FROM chat_individuel');
			while($data = $res->fetch())
			{
				if($data['EXPEDITEUR'] == $_SESSION['login'] || ($_SESSION['login'] == $data['DESTINATAIRE'])){
                    
                    if($data['EXPEDITEUR'] == $_SESSION['login'])
                      $expediteur = "Vous" ;

                    else
                      	$expediteur =  $data['EXPEDITEUR'] ;

                  	if($data['DESTINATAIRE']== $_SESSION['login'])
                    	$destinataire = "Vous" ;
                    else
                      	$destinataire =  $data['DESTINATAIRE'] ;

					$chat.="<p class='messages'> 
								<strong>".$expediteur."à".$destinataire."</strong> : ".$data['MESSAGE'];
					$chat.="</p>";
				}
                
			}
			$chat .= "</div>
	    					<p>
		        				<!-- <label for='message'> Message </label> -->
		     					</br>
		     					<textarea name='message' id='message'></textarea>
	        					</br>
        						<input id='destinataire' type='text' name='destinataire' placeholder='Destinataire' />
      							</p>
	          					<input class='button' type='submit' name='Valider' value='Envoyer !' />
	        					
	        				</p>
			    		</form>
			    	</div>";
	?>


	

</body>
</html>