<?php

    declare (strict_types = 1);

    namespace App\Connection;

    abstract class Database
    {
        public static function getDBConnection(): \PDO
        {
            $database = "db_store";
            $username = "root";
            $password = "password";

            return new \PDO("mysql:host=localhost;dbname=".$database, $username, $password);
        }
    }