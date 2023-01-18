<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritmeticos</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            background-color: rgb(33, 224, 224);
        }
        table {
            background-color: white;
            border-collapse: collapse;
            width: 100%;
        }
        td, th {
            border: 1px solid black;
            text-align: left;
            padding: 8px;
        }
        h3 {
            color: #fff;
            background: linear-gradient(to right, #00CED1, #eb7a89);
            border-radius: 10px;
            padding: 15px;
        }
        
    </style>
</head>
<body>

        <h1>Operadores Aritmeticos</h1>
        <h2>Curso de PHP</h2>

        <table>
            <tr>
                <th>Operador</th>
                <th>Nome</th>
                <th>Exemplo</th>
                <th>Resultado</th>
            </tr>

            <tr>
                <td>+</td>
                <td>Adição</td>
                <td>$a + $b</td>
                <td>Soma das variaveis $a e $b</td>
            </tr>

            <tr>
                <td>-</td>
                <td>Subtração</td>
                <td>$a - $b</td>
                <td>Subtração das variaveis $a e $b</td>
            </tr>

            <tr>
                <td>*</td>
                <td>Multiplicação</td>
                <td>$a * $b</td>
                <td>Multiplicação das variaveis $a e $b</td>
            </tr>

            <tr>
                <td>/</td>
                <td>Divisão</td>
                <td>$a / $b</td>
                <td>Divisão das variaveis $a e $b</td>
            </tr>

            <tr>
                <td>%</td>
                <td>Resto ou Modulo</td>
                <td>$a % $b</td>
                <td>Resto da divisão das variaveis $a e $b</td>
            </tr>

            <tr>
                <td>**</td>
                <td>Exponenciação</td>
                <td>$a ** $b</td>
                <td>Exponenciação das variaveis $a e $b</td>
            </tr>

        </table>
        
        <?php

            $a = 10;
            $b = 5;
            $c = $a + $b;
            echo "<h3>O resultado eh: $c</h3>";

        ?>

</body>
</html>