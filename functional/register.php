<?php 
include("conn.php");

$user = $_POST["user"];
$password = $_POST["password"];

$query =  $mysqli->query("INSERT INTO users (user, password) VALUES (\"$user\", \"$password\")");

header("Location: ../index.html");

?>