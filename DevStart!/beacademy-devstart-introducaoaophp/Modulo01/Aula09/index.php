<?php

    $url = $_SERVER['REQUEST_URI'];
    include("paginas/menu.php");

    if($url === "/Aula09/"){

        include("paginas/home.php");

    }elseif($url === "/Aula09/login"){

        include("paginas/login.php");

    }elseif($url === "/Aula09/cadastro"){

        include("paginas/cadastro.php");

    }else{

       include "paginas/404.php";

    }