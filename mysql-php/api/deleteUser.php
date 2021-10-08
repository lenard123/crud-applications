<?php

//Get Alert Redirect Function
$alertRedirect = require 'alertRedirect.php';


//Simple Validation
if (!isset($_GET['id'])) $alertRedirect('Id is required', '../');

//Get DB Connection
$conn = require('db_conn.php');


//Store Data to Variables
$id = $conn->real_escape_string($_GET['id']);

//Delete Command
$cmd = "DELETE FROM `users` WHERE `id`=$id";

//Execute Command
if ($conn->query($cmd)) {
  $alertRedirect('User deleted successfully', '../');
} else {
  $alertRedirect('Failed to delete user', '../');
}
