<?php

    declare(strict_types = 1);

    final class Cliente extends Usuario
    {
        private string $dataCadastro;

        public function getDataCadastro(): string{
            return $this->dataCadastro;
        }

        public function setDataCadastro(string $dataCadastro): void{
            $this->dataCadastro = $dataCadastro;
        }


    }