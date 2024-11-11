<?php

namespace DesignPatterns\Comportamentais\Strategy\Exercicio4;

interface Imposto
{
  public function calcular(float $valor): float;
}