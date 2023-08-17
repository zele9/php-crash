<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'Ataba');
define('DB_PASS', 'Chapobinus10');
define('DB_NAME', 'php_dev');

//create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//checking the connection
if($conn -> connect_error) {
    die('Connection Failed'. $conn->connect_error);
}

echo 'CONNECTION SUCCESSFUL!';
