<?php

namespace DesignPatterns\Estruturais\Decorator;

class MassaIntegral extends AcrescimoDecorator
{
    public function getDescricao(): string
    {
        return $this->pizza->getDescricao() . ' + Massa Integral';
    }

    public function getPreco(): float
    {
        return $this->pizza->getPreco() + 5;
    }
}