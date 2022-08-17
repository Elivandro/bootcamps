<?php

    $senha = "123456";
    $code = "MTIzNDU2";

    echo base64_encode($senha).PHP_EOL;
    echo base64_decode($code).PHP_EOL;