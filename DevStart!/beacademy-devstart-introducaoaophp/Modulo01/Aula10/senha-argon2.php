<?php

    $senha = "DevStart!";

    $code = password_hash($senha, PASSWORD_ARGON2I);

    echo $code.PHP_EOL;

    var_dump(password_verify($senha, $code));