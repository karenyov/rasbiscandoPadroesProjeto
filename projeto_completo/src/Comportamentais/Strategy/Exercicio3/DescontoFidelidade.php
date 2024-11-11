<?php

namespace DesignPatterns\Comportamentais\Strategy\Exercicio3;

class DescontoFidelidade implements Desconto
{
  public function calcular(float $valorOriginal): float
  {
    return $valorOriginal - 10.0;
  }
}