
<?php
$servername = "localhost";
$username = "root";
$password = "0912828401";
$dbname = "Ecommage2";
// Create connection
$conn =new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
};
?>
