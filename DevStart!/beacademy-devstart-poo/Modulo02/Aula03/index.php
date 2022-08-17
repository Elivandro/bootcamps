<?php

    include "Produto.php";
    include "Categoria.php";


    $c1 = new Categoria("Roupas", "Roupas Unissex");
    $c2 = new Categoria("Roupas de banho", "Toalhas, sungas, biquinis");
    $c3 = new Categoria("Calçados", "Calçados em geral");


    $produto1 = new Produto("Tenis Nike", 89.90, $c3);
    $produto1->setDescricao("Tenis para corrida");
    // $produto1->setNome("Tenis Nike");
    // $produto1->setValor(89.90);

    $produto2 = new Produto("Calça", 39.90, $c1);
    $produto2->setDescricao("Calça jeans para passeio");
    // $produto2->setCategoria($c2);
    // $produto2->setNome("Calça Jeans");
    // $produto2->setValor(39.90);

    $produto3 = new Produto("Biquini", 119.99, $c2);
    $produto3->setDescricao("Roupa de banho fem.");
    // $produto3->setNome("Saia Jeans");
    // $produto3->setValor(19.99);

    var_dump($produto1);
    var_dump($produto2);
    var_dump($produto3);
