<?php

namespace DesignPatterns\Comportamentais\Strategy\Exercicio2;

class RecomendacaoMaisVendidos implements Recomendacao
{
  public function recomendar(): array
  {
    // executa o algoritmo de regras para recomendação baseada nos mais vendidos
    return ["produto 55", "produto 20", "produto 30"];
  }
}