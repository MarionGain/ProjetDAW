<?php

switch ($_SESSION['login']) {
    case "Gamemaster":
        require_once("../view/COPG.php");
        break;
    case "COPG":
        require_once("../view/COPG.php");
        break;


    case "COS":
    	require_once("../view/COS.php");
        break;

    case "DSM":
        require_once("../view/COPG.php");
        break;
    case 2:
        echo "i égal 2";
        break;
   
}
		
?>