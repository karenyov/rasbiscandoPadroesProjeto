<?php

namespace DesignPatterns\Comportamentais\Strategy\Exercicio1;

class TarifaMetro implements Tarifa
{
  public function calcular(float $distancia): float
  {
    return $distancia * 100;
  }
}