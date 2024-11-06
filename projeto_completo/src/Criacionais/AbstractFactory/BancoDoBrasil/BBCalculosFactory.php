<?php

namespace DesignPatterns\Criacionais\AbstractFactory\BancoDoBrasil;

use DesignPatterns\Criacionais\AbstractFactory\CalculosFactory;
use DesignPatterns\Criacionais\AbstractFactory\Desconto;
use DesignPatterns\Criacionais\AbstractFactory\juros;
use DesignPatterns\Criacionais\AbstractFactory\Multa;

class BBCalculosFactory implements CalculosFactory
{
    public function criarJuros(): juros
    {
        return new BBJuros();
    }

    public function criarDesconto(): Desconto
    {
        return new BBDesconto();
    }

    public function criarMulta(): Multa
    {
        return new BBMulta();
    }
}