<?php

namespace DesignPatterns\Comportamentais\Strategy\Exercicio3;

interface Desconto
{
  public function calcular(float $valorOriginal): float;
}