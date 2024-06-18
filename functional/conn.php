<?php 
    $host = "127.0.0.1";
    $db = "database";
    $user = "root";
    $password = "";

    $mysqli = new mysqli($host, $user, $password, $db);

    /* check database conn
    if ($mysqli->connert_errno) {
        echo "Falha ao conectar: (" . $mysqli->connect_errno . ")" . $mysqli->connect_error;
    }
    else{
        echo "Sucesso ao conectar!";
    }
    */


?>