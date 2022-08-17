<?php

    include "./classes/Usuario.php";
    include "./classes/Cliente.php";
    include "./classes/ClienteVip.php";
    include "./classes/Gestor.php";
    include "./classes/GestorGeral.php";

    $cliente1 = new Cliente("chiquinho@gmail.com", "123456");
    $cliente1->setNome("Chiquinho");
    $cliente1->setDataCadastro("01/01/2022");

    $gestor1 = new Gestor("zezinho@gmail.com", "123456", 6529.52);
    $gestor1->setNome("Zeziho");

    $gestorGeral1 = new GestorGeral("elivandro@gmail.com", "1q23we", 9200);


    var_dump($cliente1);
    var_dump($gestor1);
    var_dump($gestorGeral1);
