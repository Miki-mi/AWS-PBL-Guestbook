<?php

// $dbhost = $_SERVER['RDS_HOSTNAME'];
// $dbport = $_SERVER['RDS_PORT'];
// $dbname = $_SERVER['RDS_DB_NAME'];
// $charset = 'utf8' ;

// $dsn = "mysql:host={$dbhost};port={$dbport};dbname={$dbname};charset={$charset}";
// $username = $_SERVER['RDS_USERNAME'];
// $password = $_SERVER['RDS_PASSWORD'];

// $pdo = new PDO($dsn, $username, $password);

try {
	// $link = new mysqli($_SERVER['RDS_HOSTNAME'], $_SERVER['RDS_USERNAME'], $_SERVER['RDS_PASSWORD'], $_SERVER['RDS_DB_NAME'], $_SERVER['RDS_PORT']);

    $conn = new mysqli('localhost', 'root', '', 'guestbook');
} catch (Exception $e) {
	echo 'Connection failed';
}