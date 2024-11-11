<?php

namespace DesignPatterns\Comportamentais\Strategy\Exercicio1;

class TarifaBicicleta implements Tarifa
{
  public function calcular(float $distancia): float
  {
    return $distancia * 0.5;
  }
}