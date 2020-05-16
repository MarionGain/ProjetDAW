<?php
require_once("../model/db.php");
$db = connexion();
$query = $db->query('SELECT * FROM CONNECTES');
$connectes = "";
while ($data = $query->fetch()){
	$connectes = $connectes."-".$data['LOGIN'];
}

echo $connectes;
?>
