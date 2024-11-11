<?php

namespace DesignPatterns\Comportamentais\Strategy\Exercicio4;

class ImpostoMT implements Imposto
{
  public function calcular(float $valor): float
  {
    return $valor * 0.2;
  }
}