<?php

//Get Connection
$conn = require 'db_conn.php';

//Select all users Command
$cmd = "SELECT * FROM `users`";

//Execute Command
$result = $conn->query($cmd);

//Initialize Users variable
$users = [];

//Store result into the users variable
while($row = $result->fetch_assoc()) array_push($users, $row);

//Return results
return $users;

