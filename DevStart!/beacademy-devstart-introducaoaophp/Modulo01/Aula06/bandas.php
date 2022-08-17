<?php

    $bandas = [
        "Dream theater",  //0
        "Neo Pi Neo",   //1
        "Exalta Samba",  //2
        "Iron Maiden",  //3
        "Aviões do Forró",  //4
    ];

    $bandas[100] = "Nirvana";
    $bandas[9] = "Calcinha Preta";

    echo "<ul>";

    foreach($bandas as $banda){
        echo "<li>{$banda}</li>";
    }

    echo "</ul>";