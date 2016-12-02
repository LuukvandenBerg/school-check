<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
/*$q = intval($_GET['q']);*/
$q = strval($_GET['q']);

include("../includes/db.php");

mysqli_select_db($mysqli,"ajax_demo");
$sql="SELECT * FROM test WHERE Test1 LIKE '%".$q."%'";
$result = mysqli_query($mysqli,$sql);

echo "<table>
<tr>
<th>Name</th>
<th>city</th>
<th>Level</th>
<th>Options</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['Test1'] . "</td>";
    echo "<td>" . $row['Test2'] . "</td>";
    echo "<td>" . $row['Test3'] . "</td>";
    echo "<td><a href='delete.php?id=".$row['id']."'>DELETE</a> <a href='edit.php?id=".$row['id']."'>EDIT</a>"; 
    echo "</tr>";
}
echo "</table>";
mysqli_close($mysqli);
?>
</body>
</html>