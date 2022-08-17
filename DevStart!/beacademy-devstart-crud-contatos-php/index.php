<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Minha lista de contatos</title>
        <meta name="author" content="Elivandro Silva"/>
        <meta name="keywords" content="php, tabela, contatos, html, bootstrap, php"/>
        <meta name="description" content="lista de contatos com html, bootstrap e php"/>
        <!-- CSS only -->
        <link href="./assets/css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
<body class="container">
<?php

    $url =  explode("?", $_SERVER['REQUEST_URI']);

    include "./assets/paginas/menu.php";
    include "./assets/paginas/function.php";

    match($url[0]){

        "/" => home(),
        "/login" => login(),
        "/cadastro" => cadastro(),
        "/listar" => listar(),
        "/relatorio" => relatorios(),
        "/editar" => editar(),
        "/excluir" => excluir(),
        "/logout" => logout(),
        default => error404(),

    };

    include "./assets/paginas/footer.php"

?>
