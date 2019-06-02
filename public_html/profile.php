<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
include 'ecommage/serve.php';
session_start();
$sql = " Select * from Users where  username = '".$_SESSION["username"]."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "Hello: " . $row["username"] . " You are the Id: " . $row["id"] . "-st user in the system.You job is ". $row["job"]." you will be logout after 10 seconds " . "<br>";
?>
<div id="demnguoc"></div>
<script>
    var so  = 11;
    function demnguoc() {
        so--;
        if (so != 0) {
            document.getElementById("demnguoc").innerHTML = so;
            setTimeout("demnguoc()",1000);
        } else {
            window.location.replace("index.php");
        }
    }
    demnguoc();
</script>
<div>
    <form method="get">
        <a href="logout.php">logout</a>
    </form>
</div>
</body>
</html>
