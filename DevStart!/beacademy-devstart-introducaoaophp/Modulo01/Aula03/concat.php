<?php

    $nome = "Elivandro";
    $sobrenome = "Silva";
    $idade = 30;

    $nome2 = "Elivandro ";
    $nome2 .= " Silva";   //Elivandro Silva
    $cidade = "Pimenta Bueno";

    echo $nome . " " . $sobrenome;
    echo "<br/>";
    echo $nome2;
    echo "<br/>";
    echo "Eu me chamo ". $nome . " " . $sobrenome . " tenho ". $idade . " anos e moro em " . $cidade;
    echo "<br/>";
    echo "Eu me chamo {$nome2} tenho {$idade} anos e moro em {$cidade}";