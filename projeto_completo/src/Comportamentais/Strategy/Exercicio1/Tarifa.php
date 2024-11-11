<?php

namespace DesignPatterns\Comportamentais\Strategy\Exercicio1;

interface Tarifa
{
  public function calcular(float $distancia): float;
}