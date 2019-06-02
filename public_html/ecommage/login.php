<?php
$servername = "localhost";
$username = "root";
$password = "0912828401";
$db = "Ecommage2";
// Create connection
$conn =new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
};
session_start();
$sql = "Select * from Users where username = '".$_POST["username"]."' and
password = '".$_POST["password"]."'";
$result= $conn ->query($sql);
if($result -> num_rows > 0){
    $_SESSION["username"] = $_POST["username"];
    echo "success";
}
else{
    echo "fail";
}

