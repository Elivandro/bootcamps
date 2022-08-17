<?php
    $nome = "Elivandro";
    $sobrenome = "Silva";
    $idade = 30;

    echo $idade >= 18 ? "Maior de idade" : "Menor de idade";

    echo "<br/>";

    echo isset($nome) ? $nome : "nome não definido";
    echo " ";

    //coalescência nula
    echo $sobrenome ?? "sobrenome não definido";
