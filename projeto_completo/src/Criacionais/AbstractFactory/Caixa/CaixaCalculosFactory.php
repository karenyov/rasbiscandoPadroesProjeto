<?php

namespace DesignPatterns\Criacionais\AbstractFactory\Caixa;

use DesignPatterns\Criacionais\AbstractFactory\CalculosFactory;
use DesignPatterns\Criacionais\AbstractFactory\Desconto;
use DesignPatterns\Criacionais\AbstractFactory\juros;
use DesignPatterns\Criacionais\AbstractFactory\Multa;

class CaixaCalculosFactory implements CalculosFactory
{
    public function criarJuros(): juros
    {
        return new CaixaJuros();
    }

    public function criarDesconto(): Desconto
    {
        return new CaixaDesconto();
    }

    public function criarMulta(): Multa
    {
        return new CaixaMulta();
    }
}