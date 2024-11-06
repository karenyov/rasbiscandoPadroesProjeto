<?php

namespace DesignPatterns\Estruturais\Decorator;

class PizzaCalabresa extends Pizza
{
    public function __construct()
    {
        $this->descricao = 'Deliciosa pizza de calabresa';
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function getPreco(): float
    {
        return 25;
    }
}