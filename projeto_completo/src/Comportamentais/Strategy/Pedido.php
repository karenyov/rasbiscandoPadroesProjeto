<?php

namespace DesignPatterns\Comportamentais\Strategy;

abstract class Pedido
{
    private float $valor;
    private Frete $tipoFrete;

    public function getValor(): float
    {
        return $this->valor;
    }

    public function setValor(float $valor): void
    {
        $this->valor = $valor;
    }

    public function setTipoFrete(Frete $frete)
    {
        $this->tipoFrete = $frete;
    }

    public function calculaFrete(): float
    {
        return $this->tipoFrete->calcula($this->valor);
    }
}