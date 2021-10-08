<?php

//Get Alert Redirect Function
$alertRedirect = require 'alertRedirect.php';


//Simple Validation
if (!isset($_GET['id'])) $alertRedirect('Id is required', '../');
if (!isset($_POST['fullname']) || empty(trim($_POST['fullname']))) $alertRedirect('Fullname is Required', '../');
if (!isset($_POST['email']) || empty(trim($_POST['email']))) $alertRedirect('Email is Required', '../');
if (!isset($_POST['age']) || empty(trim($_POST['age']))) $alertRedirect('Age is Required', '../');
if (!isset($_POST['gender']) || empty(trim($_POST['gender']))) $alertRedirect('Gender is Required', '../');

//Get DB Connection
$conn = require('db_conn.php');


//Store Data to Variables
$id = $conn->real_escape_string($_GET['id']);
$fullname = $conn->real_escape_string($_POST['fullname']);
$email = $conn->real_escape_string($_POST['email']);
$age = $conn->real_escape_string($_POST['age']);
$gender = $conn->real_escape_string($_POST['gender']);
$image = "https://avatars.dicebear.com/api/initials/" . urlencode($fullname) . ".svg";

//Update Command
$cmd = "UPDATE `users` SET `fullname`='$fullname', `email`='$email', `age`=$age, `gender`='$gender', `image`='$image' WHERE `id`=$id";

//Execute Command
if ($conn->query($cmd)) {
  $alertRedirect('User updated successfully', '../');
} else {
  $alertRedirect('Failed to update user', '../');
}
