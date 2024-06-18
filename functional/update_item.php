<?php

include("conn.php");

$id = $_POST["id"];
$product = $_POST["product"];
$price = $_POST["price"];
$quantity = $_POST["quantity"];
$type = $_POST["type"];

$mysqli->query("UPDATE products SET product = '$product', price = '$price', quantity = '$quantity', type = '$type' WHERE id = '$id'");

header("Location: ../manage.html");

?>