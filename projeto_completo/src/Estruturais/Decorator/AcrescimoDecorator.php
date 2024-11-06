<?php

namespace DesignPatterns\Estruturais\Decorator;

abstract class AcrescimoDecorator extends Pizza
{
    protected Pizza $pizza;

    public function __construct(Pizza $pizza)
    {
        $this->pizza = $pizza;
    }

    abstract public function getDescricao(): string;

    abstract public function getPreco(): float;
}