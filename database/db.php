<?php

require __DIR__ . '/vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__, './../../../inc/dbinfo.env');
$dotenv->load();

$DB_SERVER = env(DB_SERVER);
$DB_USERNAME = env(DB_USERNAME);
$DB_PASSWORD = env(DB_PASSWORD);
$DB_DATABASE = env(DB_DATABASE);

try {
    //$conn = new mysqli('localhost', 'root', '', 'guestbook');
	$conn = new mysqli($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);
} catch (Exception $e) {
	echo 'Connection failed';
}