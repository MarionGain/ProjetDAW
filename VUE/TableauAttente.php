
<?php
require_once("BDD.php");
$db = OpenCon();
$query = $db->query('SELECT * FROM tableauattente');

echo "<table><tr><th>Login</th><th>Role</th></th>";
while ($data = $query->fetch()){
	echo "<tr>";
	echo "<td>".$data['LOGIN']."</td>";
	if($data['ROLE']==NULL)
		echo "<td>AUCUN</td>";
	else
		echo "<td>".$data['ROLE']."</td>";
	echo "</tr>";
}

echo "</table>"
?>
