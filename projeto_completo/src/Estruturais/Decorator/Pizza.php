<?php

namespace DesignPatterns\Estruturais\Decorator;

abstract class Pizza
{
    protected string $descricao = 'Descrição não definida';
    protected float $preco;

    abstract public function getDescricao(): string;

    abstract public function getPreco(): float;
}