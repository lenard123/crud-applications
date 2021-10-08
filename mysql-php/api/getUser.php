<?php

//Get alertRedirect function
$alertRedirect = require('alertRedirect.php');

//Validate
if (!isset($_GET['id'])) $alertRedirect('Id is required', '../');

//Get Connection
$conn = require('db_conn.php');

//Get ID
$id = $conn->real_escape_string(trim($_GET['id']));

//Select User Command
$cmd = "SELECT * FROM `users` WHERE `id` = $id";

//Execute Query
$result = $conn->query($cmd);

//Initialize User Variable
$user = null;

if ($row = $result->fetch_assoc()) $user = $row;

return $user;
