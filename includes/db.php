<?php

require_once('config.php');

$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($mysqli->connect_errno) {
	echo "Can't connect to database";
}

?>