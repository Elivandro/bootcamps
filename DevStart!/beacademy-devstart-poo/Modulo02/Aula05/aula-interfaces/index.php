<?php

    include "Validar.php";
    include "ValidarBR.php";
    include "ValidarUS.php";


    $cpf = "00100200301";
    $docX = "00100200300405";

    $br = new ValidarBR();
    $br->validarDocumento($cpf);

    $us = new ValidarUS();
    $us->validarDocumento($docX);


    echo "Funcionou";