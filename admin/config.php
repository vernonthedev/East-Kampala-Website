<?php
$server = 'localhost';
$user = 'root';
$database = 'inventweb_ngo';
$password = '';
$conn = mysqli_connect($server, $user, $password, $database);
if($conn->connect_error) {
  die("Connection failed". $conn->connect_error);
}

?>
