<?php

//Define Configuration
define('DB_USERNAME', 'root');
define('DB_HOSTNAME', 'localhost');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'crud_application');

//Initialize Connection
$conn = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

//Throw an error if failed to connect to database
if ($conn->errno) {
  die('Cant connect to MySQL Database');
}

//Return Connection
return $conn;
