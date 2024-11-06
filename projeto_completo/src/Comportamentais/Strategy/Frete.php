<?php

namespace DesignPatterns\Comportamentais\Strategy;

interface Frete
{
    public function calcula(float $valorPedido): float;
}