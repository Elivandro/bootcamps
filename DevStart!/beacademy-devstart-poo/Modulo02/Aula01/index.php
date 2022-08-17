<?php

    include "Curso.php";
    include "Aluno.php";
    include "Professor.php";


    $p1 = new Professor();
    $p1->nome = "Alessandro";
    $p1->cpf = "123.123.654.89";
    $p1->curso = "Aprendendo Introdução básico ao Intermediário do PHP";
    $p1->salario = 1000.21;

    $p1->nome .= " Feitoza";

    var_dump($p1);