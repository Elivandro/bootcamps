<?php

    $arquivo = fopen("file.csv", "a+");


    fwrite($arquivo, "Elivandro" . PHP_EOL);
    fwrite($arquivo, "Silva" . PHP_EOL);


    fclose($arquivo);