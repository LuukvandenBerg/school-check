<?php
	require_once('../includes/db.php');

	$sql = 'SELECT * FROM test';
	$result = $mysqli->query($sql);

	echo "Select a school to edit.<br><br>";

	echo "<table>
	<tr>
	<th>id</th>
	<th>Name</th>
	<th>city</th>
	<th>Level</th>
	<th>Options</th>
	</tr>";
	while($row = $result->fetch_assoc()){
		echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['Test1'] . "</td>";
    echo "<td>" . $row['Test2'] . "</td>";
    echo "<td>" . $row['Test3'] . "</td>";
    echo "<td><a href='delete.php?id=".$row['id']."'>DELETE</a> <a href='edit.php?id=".$row['id']."'>EDIT</a>"; 
    echo "</tr>";
	}
	echo "</table>";

	echo "<a href='add.php'>ADD</a><br><br>";
	echo "<a href='../index.php'>Homepage</a>";

?>
<!DOCTYPE html>
<html>
<head>
	<title>CMS</title>
	<link rel="StyleSheet" href="../css/main.css">
	<script>
	function showUser(str) {
	    if (str == "") {
	        document.getElementById("txtHint").innerHTML = "";
	        return;
	    } else {
	        if (window.XMLHttpRequest) {
	            // code for IE7+, Firefox, Chrome, Opera, Safari
	            xmlhttp = new XMLHttpRequest();
	        } else {
	            // code for IE6, IE5
	            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	        }
	        xmlhttp.onreadystatechange = function() {
	            if (this.readyState == 4 && this.status == 200) {
	                document.getElementById("txtHint").innerHTML = this.responseText;
	            }
	        };
	        xmlhttp.open("GET","getSchool.php?q="+str,true);
	        xmlhttp.send();
	    }
	}
	</script>
</head>
<body>
	<br><br>
	<form method="POST">
	<input type="text" onkeyup="showUser(this.value)" placeholder="Search">
	</form>
	<div id="txtHint"><b></b></div>
</body>
</html>