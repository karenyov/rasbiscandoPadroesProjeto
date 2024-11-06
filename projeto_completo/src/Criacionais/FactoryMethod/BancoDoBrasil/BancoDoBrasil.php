<?php

namespace DesignPatterns\Criacionais\FactoryMethod\BancoDoBrasil;

use DesignPatterns\Criacionais\FactoryMethod\Banco;
use DesignPatterns\Criacionais\FactoryMethod\Boleto;

class BancoDoBrasil extends Banco
{
    protected function criarBoleto(int $vencimentoBoleto, float $valor): Boleto
    {
        return new BancoDoBrasilBoleto10Dias($valor);
    }
}
