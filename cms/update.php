<?php
	session_start();
	require_once('../includes/db.php');

	$Test1 = $_POST['Test1'];
	$Test2 = $_POST['Test2']; 
	$Test3 = $_POST['Test3'];
	$id = $_SESSION['id'];

	$sql = "UPDATE test SET Test1 = '$Test1', Test2 = '$Test2', Test3 = '$Test3' WHERE id = '$id'";
	$result = $mysqli->query($sql);

	header('location: show.php');
?>