<?php

namespace DesignPatterns\Comportamentais\Strategy\Exercicio3;

class DescontoSazonal implements Desconto
{
  public function calcular(float $valorOriginal): float
  {
    return $valorOriginal - 100;
  }
}