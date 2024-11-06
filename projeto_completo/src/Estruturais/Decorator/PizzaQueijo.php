<?php

namespace DesignPatterns\Estruturais\Decorator;

class PizzaQueijo extends Pizza
{
    public function __construct()
    {
        $this->descricao = 'Deliciosa pizza de queijo';
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function getPreco(): float
    {
        return 22;
    }
}