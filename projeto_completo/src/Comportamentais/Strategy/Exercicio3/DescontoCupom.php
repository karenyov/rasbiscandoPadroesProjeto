<?php

namespace DesignPatterns\Comportamentais\Strategy\Exercicio3;

class DescontoCupom implements Desconto
{
  public function calcular(float $valorOriginal): float
  {
    return $valorOriginal -($valorOriginal * 0.1);
  }
}