<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercicio 1 - Calculadora simples</title>
        <meta name="author" content="Elivandro Silva"/>
        <meta name="keywords" content="php, calculadora, operações basicas"/>
        <meta name="description" content="Calculadora simples com html e php"/>
    </head>
<body>
<form action="" method="post">
    <input name="num1" placeholder="digite o numero 1"/>
    <br/>
    <input name="num2" placeholder="digite o numero 2"/>
    <br/>
    <select name="operador">
        <option value="-">Subtração</opion>
        <option value="+">Adição</opion>
        <option value="*">Multiplicação</opion>
        <option value="/">Divisão</opion>
    </select>
    <br/>
    <button>Enviar</button>
</form>
<?php
    if($_POST){

        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operador = $_POST["operador"];

        switch($operador){

            // subtração
            case "-":
                $calculo = $num1 - $num2;
                break;

            // adição
            case "+":
                $calculo = $num1 + $num2;
                break;

            // multiplicação
            case "*":
                $calculo = $num1 * $num2;
                break;

            // divisão
            case "/":
                $calculo = $num1 / $num2;
        }

        echo $calculo;

    }

?>
</body>
</html>