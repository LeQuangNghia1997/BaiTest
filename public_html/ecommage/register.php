<?php
include "serve.php";
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$job = $_POST['job'];
$query = "INSERT INTO Users (username,password,job) values ('$username','$password','$job')";
$result = $conn->query($query);

$conn->close();
