<?php

    declare (strict_types = 1);

    namespace Classes\Config;

    class Usuario
    {
        private string $nome;
        private string $email;
        private string $telefone;

        public function __construct(

            string $nome,
            string $email,
            string $telefone,

        )
        {

            $this->nome = $nome;
            $this->email = $email;
            $this->telefone = $telefone;

        }

        public function getNome():string
        {

            return $this->nome;

        }

        public function setNome(string $nome): void
        {

            $this->nome = $nome;

        }

        public function getEmail():string
        {

            return $this->email;
        }

        public function setEmail(string $email): void
        {

            $this->email = $email;

        }

        public function getTelefone(): string
        {

            return $this->telefone;

        }

        public function setTelefone(string $telefone): void
        {

            $this->telefone = $telefone;
            
        }
    }