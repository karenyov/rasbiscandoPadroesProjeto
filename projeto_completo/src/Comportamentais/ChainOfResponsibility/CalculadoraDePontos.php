<?php

namespace DesignPatterns\Comportamentais\ChainOfResponsibility;

class CalculadoraDePontos
{
    public function calcularPontosDoPedido(Pedido $pedido, int $dia): int
    {
        $pontos70 = new Pontos70Reais();
        $pontos40 = new Pontos40Reais();
        $pontos20 = new Pontos20Reais();
        $nenhumPonto = new NenhumPonto();

        $pontos70->setProximo($pontos40);
        $pontos40->setProximo($pontos20);
        $pontos20->setProximo($nenhumPonto);

        if ($dia >= 16 && $dia <= 31) {
            return $pontos70->calcularPontos($pedido) * 2;
        }

        return $pontos70->calcularPontos($pedido);
    }
}