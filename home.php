<?php
require_once "conn.php";

session_start();

$id = $_SESSION['user_id'];
$sql = "SELECT * FROM users WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
$datas = mysqli_fetch_array($result);


?>
<html> 
<head> 
  <title>Home</title>
  <meta charset="UTF-8">
</head>
<body> 
<h1><?="Hello, ". $datas['name']?></h1>
<a href="logout.php">Logout</a>
</body>
</html>
