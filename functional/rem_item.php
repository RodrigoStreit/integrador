<?php
    include("conn.php");

    $product = $_POST["id"];

    $mysqli->query("DELETE FROM products WHERE id = \"$product\"");

    header("Location: ../manage.html");
?>