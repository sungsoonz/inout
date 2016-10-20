<?php
// Connect to MySQL

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = 'root';
$mysql_db = 'inout';

$mysqli = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db);


if ($mysqli->connect_errno) {
	printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}




?>


