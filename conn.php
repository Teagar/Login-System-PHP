<?php
$hostname = "localhost";
$username = "root";
$password = "2005";
$database = "loginsystem";

$conn = mysqli_connect($hostname, $username, $password, $database);

if(mysqli_connect_error()) {
  echo "Error". mysqli_connect_error();
}
