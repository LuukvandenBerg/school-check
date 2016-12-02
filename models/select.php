<?php
	require_once('includes/db.php');

	$sql = 'SELECT * FROM test';
	$result = $mysqli->query($sql);

	while($row = $result->fetch_assoc()){
		echo "<div class='schoolname'>"
			.$row['Test1'].
		"</div>";
		echo "<div class='city'>"
			.$row['Test2'].
		"</div>";
		echo "<div class='level'>"
			.$row['Test3'].
		"</div><br>";
	}
?>