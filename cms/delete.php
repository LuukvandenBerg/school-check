<?php
	require_once('../includes/db.php');
	$id = $_GET['id'];

	$sql = "DELETE FROM test WHERE id = $id";
	$result = $mysqli->query($sql);

	header('location: show.php');
?>