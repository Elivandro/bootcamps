<?php

    declare(strict_types = 1);

    abstract class Usuario 
    {

        private string $nome;
        private string $email;
        private string $senha;
        private string $cpf;

        public function __construct(

            string $email,
            string $senha

        )
        {
            $this->email = $email;
            $this->senha = $senha;
        }

        public function getNome(): string{
            return $this->nome;
        }

        public function setNome(string $nome): void{
            $this->nome = $nome;
        }

        public function getEmail(): string{
            return $this->email;
        }

        public function setEmail(string $email): void{
            $this->email = $email;
        }

        public function getSenha(): string{
            return $this->senha;
        }

        public function setSenha(string $senha): void{
            $this->senha = $senha;
        }

        public function getCPF(): string{
            return $this->cpf;
        }

        public function setCPF(string $cpf): void{
            $this->cpf = $cpf;
        }

    }