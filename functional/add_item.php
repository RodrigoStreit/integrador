<?php 
include("conn.php");

$product = $_POST["product"];
$price = $_POST["price"];
$quantity = $_POST["quantity"];
$type = $_POST["type"];


$query =  $mysqli->query("INSERT INTO products (product, price, quantity, type) VALUES (\"$product\", \"$price\", \"$quantity\", \"$type\")");

header("Location: ../manage.html");

?>