<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <style>
        body{
            background: url("style/bg.webp");

            display: flex;
            flex-direction: column;
            align-items: center;
        }
        fieldset{
            margin-top: 5%;
            background-color: rgba(255, 255, 255, 0.75);
            border-radius: 15px;
            box-shadow: 0px 0px 10px 5px rgba(255, 255, 255, 0.75);
            border: none;
            width: 800px;
            height: 400px;

            display: flex;
            flex-direction: row;
            justify-content: center;

            overflow: auto;
    }
        table {
            border-collapse: collapse;
            border: 2px solid rgb(0,0,0);
            letter-spacing: 1px;
            width: 600px;
        }

        td, th {
            border: 1px solid rgb(0,0,0);
            padding: 10px 20px;
        }

        .head{
            font-size: 1.25rem;
            background-color: rgba(0,100,190, 0.35);
        }
        a button{
            transform: translate(200%, 20%);
        }
    </style>
</head>
<body>
    <fieldset>
        <div>
            <table>
                <tr>
                    <td class="head">Id</td>
                    <td class="head">Produto</td>
                    <td class="head">Valor</td>
                    <td class="head">Estoque</td>
                    <td class="head">Tipo</td>
                </tr>
                <?php
                    require("functional/conn.php");

                    $data_array = mysqli_query($mysqli, "SELECT * FROM products;");
            
                        while ($a = mysqli_fetch_array($data_array)) {
                            echo "<tr>";
                            echo "<td>".$a["id"]."</td>";
                            echo "<td>".$a["product"]."</td>";
                            echo "<td>R$ ".$a["price"]."</td>";
                            echo "<td>".$a["quantity"]."</td>";
                            echo "<td>".$a["type"]."</td>";
                            echo "</tr>";
                        }
                ?>
            </table>
        </div>
        <a href="painel.html"><button>sair</button></a>
    </fieldset>
</body>
</html>