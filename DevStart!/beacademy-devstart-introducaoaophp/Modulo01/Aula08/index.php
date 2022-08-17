<?php

    $url = $_SERVER['REQUEST_URI'];
    include "paginas/menu.php";

    match($url){

        "/" => include("paginas/home.php"),
        "/login" => include("paginas/login.php"),
        "/cadastro" => include("paginas/cadastro.php"),
        default => include "paginas/404.php",

    };