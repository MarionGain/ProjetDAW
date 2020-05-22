<?php
require_once("BDD.php");
$db = OpenCon();
$query = $db->query('SELECT * FROM ROLE');

echo "<table><tr><th>Login</th><th>Role</th></th>";
while ($data = $query->fetch()){
	echo "<tr>";
	echo "<td>".$data['login']."</td>";
	echo "<td>".$data['role']."</td>";
	echo "</tr>";
}

echo "</table>"
?>
