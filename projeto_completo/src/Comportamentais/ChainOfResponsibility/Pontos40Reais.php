<?php

namespace DesignPatterns\Comportamentais\ChainOfResponsibility;

class Pontos40Reais implements CalculadorDePontos
{
    private CalculadorDePontos $proximo;

    public function calcularPontos(Pedido $pedido): int
    {
        if ($pedido->getValor() >= 40) {
            return intdiv($pedido->getValor(),  7);
        }

        return $this->proximo->calcularPontos($pedido);
    }

    public function setProximo(CalculadorDePontos $proximo): void
    {
        $this->proximo = $proximo;
    }
}