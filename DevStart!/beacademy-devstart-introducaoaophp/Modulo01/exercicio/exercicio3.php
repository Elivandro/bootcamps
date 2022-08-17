<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercicio 3 - If ElseIf If</title>
        <meta name="author" content="Elivandro Silva"/>
        <meta name="keywords" content="if, else if, php"/>
        <meta name="description" content="estrura de decisão"/>

    </head>
<body>
<?php

    $num = 10;

    if($num > 0){

        echo "Positivo";

    }else if($num < 0){

        echo "Negativo";

    }else{

        echo "Nulo";
    }

    echo "<br/> pronto, execução Terminou.";