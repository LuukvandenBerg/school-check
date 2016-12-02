<?php
	session_start();
	$_SESSION['id'] = $_GET['id'];
?>

<form action="update.php" method="POST">
	Schoolname:<br><input type="text" name="Test1"/><br>
	City:<br><input type="text" name="Test2"/><br>
	Level:<br><input type="text" name="Test3"/><br>
	<input type="submit"/>
</form>