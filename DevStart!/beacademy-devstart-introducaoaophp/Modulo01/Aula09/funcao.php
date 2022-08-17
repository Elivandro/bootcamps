<?php

    declare(strict_types=1);

    function soma(float $num1, float $num2): void {

        echo $num1 + $num2.PHP_EOL;

    }

    soma(10.25, 5.25); // 15

    ////////////////

    function pagarConta(float $dinheiro, float $fatura): float{

        // codigo;

        return $dinheiro - $fatura;
    }

    echo pagarConta(1200, 1000).PHP_EOL;

    ////////////////

    function pagar(float $dinheiro, float $fatura): float{

        // codigo;

        return $dinheiro - $fatura;
    }

    echo pagar(384.79, 255.29).PHP_EOL;

    //////////////////

    function welcome(string $nome){

        echo "Bem vindo {$nome}".PHP_EOL;

    }

    welcome("Elivandro");
    welcome("Ana");
    welcome("Jennifer");