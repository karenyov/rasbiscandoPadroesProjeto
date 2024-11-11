<?php

namespace DesignPatterns\Comportamentais\Strategy\Exercicio1;

class TarifaOnibus implements Tarifa
{
  public function calcular(float $distancia): float
  {
    return $distancia * 2;
  }
}