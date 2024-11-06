<?php

namespace DesignPatterns\Estruturais\Decorator;

class PizzaFrango extends Pizza
{
    public function __construct()
    {
        $this->descricao = 'Deliciosa pizza de frango';
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function getPreco(): float
    {
        return 19;
    }
}