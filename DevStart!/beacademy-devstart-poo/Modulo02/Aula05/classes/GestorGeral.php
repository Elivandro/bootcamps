<?php

    declare(strict_types = 1);

    class GestorGeral extends Gestor
    {

        private float $bonusAnual;

        public function getBonusAnual(): float{
            return $this->bonusAnual;
        }

        public function setBonusAnual(float $bonusAnual): void{
            $this->bonusAnual = $bonusAnual;
        }
    }