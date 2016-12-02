<?php
	require_once('../includes/db.php');

	$test1 = $_POST['Test1'];
	$test2 = $_POST['Test2'];
	$test3 = $_POST['Test3'];


	$sql = "INSERT INTO test (Test1, Test2, Test3) VALUES ('$test1', '$test2', '$test3')";
	$result = $mysqli->query($sql);

	header('location: show.php');
?>