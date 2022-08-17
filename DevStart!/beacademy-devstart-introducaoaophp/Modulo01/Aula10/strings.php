<?php

    $nome = "elivandro";
    $sobrenome = "SILVA";

    $nome2 = "elivandro de aguiar silva";

    echo "Nome: ". ucfirst($nome).PHP_EOL;
    echo "Sobrenome: ". ucfirst(strtolower($sobrenome)).PHP_EOL;
    echo "Nome: ". ucwords($nome2);