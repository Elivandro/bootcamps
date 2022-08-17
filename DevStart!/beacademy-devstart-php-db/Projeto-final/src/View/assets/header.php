<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Meu Ecommerce - DevStart! Elivandro Be.Academy & Paylivre</title>
        <meta name="author" content="Elivandro Silva"/>
        <meta name="keywords" content="php, tabela, contatos, html, bootstrap, php"/>
        <meta name="description" content="lista de contatos com html, bootstrap e php"/>
        <!-- CSS only -->
        <link href="../../assets/css/style.css" rel="stylesheet"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
<body class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light mt-5">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item p-2">
                    <a href="/" class="btn btn-outline-dark">Home</a>
                </li>
                <li class="nav-item p-2">
                    <a href="/login" class="btn btn-outline-dark">Conta</a>
                </li>
                <li class="nav-item p-2">
                    <a href="/categorias/listar" class="btn btn-outline-dark">Categorias</a>
                </li>
                <li class="nav-item p-2">
                    <a href="/produtos/listar" class="btn btn-outline-dark">produtos</a>
                </li>
                <li class="nav-item p-2">
                    <a href="/relatorio" class="btn btn-outline-dark">Relatorios</a>
                </li>
            </ul>
            <?php
                    if(isset($_SESSION['email'])) { 

                        echo "<ul class='navbar-nav'>
                                <li class='nav-item'><a href='/logout' class='btn btn-outline-dark'>Logout</a></li>
                            </ul>";

                    }
            ?>
        </div>
    </nav>
    <hr/>