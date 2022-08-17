<?php

    $frutas = [
        "laranja",  //0
        "Banana",   //1
        "Abacaxi",  //2
    ];

    //nova fruta no array
    $frutas [] = "Maça";        //3

    $frutas [10] = "Melancia";  //10
    $frutas [7] = "Morango";
    $frutas [] = "Tangerina";   //11 
    $frutas [] = "Uva";         //12
?>

    <ul>
        <li><?php echo $frutas[0]; ?></li>
        <li><?php echo $frutas[1]; ?></li>
        <li><?php echo $frutas[2]; ?></li>
        <li><?php echo $frutas[3]; ?></li>
        <li><?php echo $frutas[7]; ?></li>
        <li><?php echo $frutas[10]; ?></li>
        <li><?php echo $frutas[11]; ?></li>
        <li><?php echo $frutas[12]; ?></li>
    </ul>