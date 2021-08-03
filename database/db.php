<?php

$db_params = parse_ini_file( dirname(__FILE__).'/db_params.ini', false );

try {
    //$conn = new mysqli('localhost', 'root', '', 'guestbook');
	$conn = new mysqli($db_params['host'], $db_params['user'], $db_params['password'], $db_params['dbname']);
} catch (Exception $e) {
	echo 'Connection failed';
}