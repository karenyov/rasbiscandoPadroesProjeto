<?php

namespace DesignPatterns\Comportamentais\Strategy\Exercicio4;

class ImpostoSP implements Imposto
{
  public function calcular(float $valor): float
  {
    return $valor * 0.5;
  }
}