<?php

namespace DesignPatterns\Criacionais\AbstractFactory;

interface CalculosFactory
{
    public function criarJuros(): juros;
    public function criarDesconto(): Desconto;
    public function criarMulta(): Multa;
}