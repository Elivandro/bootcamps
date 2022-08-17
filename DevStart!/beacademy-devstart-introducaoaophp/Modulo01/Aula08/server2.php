<?php

    $url = $_SERVER['REQUEST_URI'];

    if($url === "/"){

        echo "<h1>Página inicial</h1>";

    }elseif($url === "/login"){

        echo "<h1>Página de login</h1>";

    }elseif($url === "/cadastro"){

        echo "<h1>Página de cadastro</h1>";

    }else{

        echo "<h1>Página não encontrada</h1>";

    }