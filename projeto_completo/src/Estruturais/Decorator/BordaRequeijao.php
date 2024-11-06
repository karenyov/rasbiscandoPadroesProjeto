<?php

namespace DesignPatterns\Estruturais\Decorator;

class BordaRequeijao extends AcrescimoDecorator
{
    public function getDescricao(): string
    {
        return $this->pizza->getDescricao() . ' + Borda recheada de requeijão';
    }

    public function getPreco(): float
    {
        return $this->pizza->getPreco() + 8.50;
    }
}