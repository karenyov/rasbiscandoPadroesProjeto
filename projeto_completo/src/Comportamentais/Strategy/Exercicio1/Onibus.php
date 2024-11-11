<?php

namespace DesignPatterns\Comportamentais\Strategy\Exercicio1;

class Onibus extends Transporte {

    public string $numero;

    public function getNumero(): string
    {
        return $this->numero;
    }

    
    public function setNumero(string $numero) : self
    {
        $this->numero = $numero;

        return $this;
    }
}