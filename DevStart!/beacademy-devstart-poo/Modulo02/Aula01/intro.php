<?php

    include "Aluno.php";
    include "Curso.php";
    include "Professor.php";

    $a1 = new Aluno(); //Objeto Aluno;
    $a1->nome = "Alessandro";
    $a1->cpf = "123.123.654-89";

    $a1->nome .= " Feitoza";

    // $aluno1 = ["nome" => "Alessandro",
    //             "CPF" => "123.123.654-89"];

    // $aluno2 = ["Nome" => "Guilherme",
    //             "cpf" => "111.222.333.-99"];

    // $aluno2 = ["NOME" => "Bruno",
    //             "CPF" => "005.002.789.88"];


    $CursoPHP = new Curso(); //Objeto Curso;
    $CursoPHP->nome = "Introdução ao PHP";
    $CursoPHP->cargaHoraria = 88;
    $CursoPHP->descricao = "Aprendendo do Básico ao intermediário do PHP";
    $CursoPHP->professor = "Alessandro Feitoza";

    echo "Nome: {$a1->nome} CPF: {$a1->cpf}";
