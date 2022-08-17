<?php

    declare(strict_types=1);

    function exibirNomes(array $nomes): void
    {

        foreach($nomes as $exibirNome){

            echo "Nome: {$exibirNome}".PHP_EOL;

        }
    }

    exibirNomes([
        "Ana",
        "Elivandro",
        "Jennifer",
        "Lucas",
        "Mayume"
    ]);