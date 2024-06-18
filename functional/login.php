<?php

    include("conn.php");

    if (isset($_POST['user']) || isset($_POST['password'])) {
        if (strlen($_POST['user']) > 128 || strlen($_POST['user']) == 0 ) {
            echo "insira um usuário válido."; 
        } else if ( strlen($_POST['password']) > 128 || strlen($_POST['password']) == 0 ) {
            echo "insira uma senha válida."; 
        } else {
            $User = $mysqli->real_escape_string($_POST['user']);
            $Password = $mysqli->real_escape_string($_POST['password']);

            $sql_code = "SELECT * FROM users WHERE user = '$User' AND password = '$Password' ";
            $sql_query = $mysqli->query($sql_code) or die("Falha ao executar code" . $mysqli->error);

            if ($sql_query->num_rows >= 1 ) {
                $user = $sql_query->fetch_assoc();

                if (!isset($_SESSION)) {
                    session_start();
                }

                $_SESSION['id'] = $user['id'];
                $_SESSION['user'] = $user['user'];

                header("Location: ../painel.html");

            } else {
                echo "Falha ao logar! Usuário ou senha incorretos.";
            }
        }
    }

?>