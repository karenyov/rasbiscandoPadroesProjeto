<?php

namespace DesignPatterns\Comportamentais\ChainOfResponsibility;

class Pontos70Reais implements CalculadorDePontos
{
    private CalculadorDePontos $proximo;

    public function calcularPontos(Pedido $pedido): int
    {
        if ($pedido->getValor() >= 70) {
            return intdiv($pedido->getValor(),  5);
        }

        return $this->proximo->calcularPontos($pedido);
    }

    public function setProximo(CalculadorDePontos $proximo): void
    {
        $this->proximo = $proximo;
    }
}