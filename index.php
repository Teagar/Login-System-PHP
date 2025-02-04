<?php
// Connection
require_once 'conn.php';

// Session
session_start();


$currentPage = $_SERVER['PHP_SELF'];
$isLoginFormSend = isset($_POST['btn-enter']);

if ($isLoginFormSend) {
  $errors = [];
  $login = mysqli_real_escape_string($conn, $_POST['login']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  if (empty($login) || empty($password)) {
    $errors = "<li> Somee error lol</li>";
  }
}
?>
<!DOCTYPE html>
<head>
  <title>Login</title>
  <meta charset="utf-8">
</head>
<body> 
  <h1> Login </h1>
  <form action ="<?=$currentPage?>" method="POST"> 
    <label for="login"> Login: </label>
    <input type="text" id="login" name="login"/>

    <label for="password"> Password: </label>
    <input type="password" id="password" name="password"/>

    <button type="submit" name="btn-enter"> Enter </button>
  </form>

</body>
</html>
