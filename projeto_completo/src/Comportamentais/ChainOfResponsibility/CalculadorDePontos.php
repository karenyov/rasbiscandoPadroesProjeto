<?php

namespace DesignPatterns\Comportamentais\ChainOfResponsibility;

interface CalculadorDePontos
{
    public function calcularPontos(Pedido $pedido): int;

    public function setProximo(CalculadorDePontos $proximo): void;
}