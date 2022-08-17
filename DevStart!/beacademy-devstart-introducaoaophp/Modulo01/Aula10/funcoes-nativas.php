<?php

    $notasCursoA = [
        10,
        9,
        9.5,
        7,
    ];

    $notasCursoB = [
        8,
        9.4,
        5,
        6,
    ];

    function mediaDeNotas (array $notas): float
    {
        // $total = array_sum($notas);
        // $quantidade = count($notas);

        // foreach($notas as $cadaNota){
        //     $total += $cadaNota;
        //     $quantidade++;
        // }

        return array_sum($notas) / count($notas);
    }

    echo mediaDeNotas($notasCursoA).PHP_EOL;
    echo mediaDeNotas($notasCursoB);