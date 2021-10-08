<?php

//Get Alert Redirect Function
$alertRedirect = require 'alertRedirect.php';


//Simple Validation
if (!isset($_POST['fullname']) || empty(trim($_POST['fullname']))) $alertRedirect('Fullname is Required', '../create.php');
if (!isset($_POST['email']) || empty(trim($_POST['email']))) $alertRedirect('Email is Required', '../create.php');
if (!isset($_POST['age']) || empty(trim($_POST['age']))) $alertRedirect('Age is Required', '../create.php');
if (!isset($_POST['gender']) || empty(trim($_POST['gender']))) $alertRedirect('Gender is Required', '../create.php');

//Get DB Connection
$conn = require('db_conn.php');


//Store Data to Variables
$fullname = $conn->real_escape_string($_POST['fullname']);
$email = $conn->real_escape_string($_POST['email']);
$age = $conn->real_escape_string($_POST['age']);
$gender = $conn->real_escape_string($_POST['gender']);
$image = "https://avatars.dicebear.com/api/initials/" . urlencode($fullname) . ".svg";


//Insert User Command
$cmd = "INSERT INTO `users` (`fullname`, `email`, `age`, `gender`, `image`) VALUES ('$fullname', '$email', $age, '$gender', '$image')";

//Execute Command
if ($conn->query($cmd)) {
  $alertRedirect('User save successfully', '../');
} else {
  $alertRedirect('Failed to save user', '../create.php');
}