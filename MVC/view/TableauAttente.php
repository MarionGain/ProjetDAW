<?php
require_once("../model/db.php");

$query = requete_and_return('SELECT * FROM ROLE');

echo "<table><tr><th>Login</th><th>Role</th></th>";
while ($data = $query->fetch()){

	echo "<tr>";
	echo "<td>".$data['login']."</td>";
	if($data['role']==NULL)
		echo "<td>AUCUN</td>";
	else
		echo "<td>".$data['role']."</td>";
	echo "</tr>";
}

echo "</table>";
?>
