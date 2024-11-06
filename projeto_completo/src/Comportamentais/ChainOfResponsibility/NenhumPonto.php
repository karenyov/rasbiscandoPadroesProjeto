<?php

namespace DesignPatterns\Comportamentais\ChainOfResponsibility;

class NenhumPonto implements CalculadorDePontos
{
    private CalculadorDePontos $proximo;

    public function calcularPontos(Pedido $pedido): int
    {
        return 0;
    }

    public function setProximo(CalculadorDePontos $proximo): void
    {
        //
    }
}