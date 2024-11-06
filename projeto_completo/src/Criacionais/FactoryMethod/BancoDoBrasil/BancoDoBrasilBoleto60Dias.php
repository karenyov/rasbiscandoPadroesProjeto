<?php

namespace DesignPatterns\Criacionais\FactoryMethod\BancoDoBrasil;

use DesignPatterns\Criacionais\FactoryMethod\Boleto;

class BancoDoBrasilBoleto60Dias extends Boleto
{
    public function __construct(float $valor)
    {
        parent::__construct($valor);
        $this->juros = 0.10;
        $this->desconto = 0;
        $this->multa = 0.15;
    }
}