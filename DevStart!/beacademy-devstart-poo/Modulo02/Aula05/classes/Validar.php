<?php

    declare (strict_types = 1);

    abstract class Validar
    {
        public static function validarCPF(string $cpf): void
        {
            if(strlen($cpf) != 11){
                die ("cpf inválido!");
            }
        }
    }