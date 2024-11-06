<?php

namespace DesignPatterns\Comportamentais\ChainOfResponsibility;

class Pontos20Reais implements CalculadorDePontos
{
    private CalculadorDePontos $proximo;

    public function calcularPontos(Pedido $pedido): int
    {
        if ($pedido->getValor() >= 20) {
            return intdiv($pedido->getValor(),  10);
        }

        return $this->proximo->calcularPontos($pedido);
    }

    public function setProximo(CalculadorDePontos $proximo): void
    {
        $this->proximo = $proximo;
    }
}