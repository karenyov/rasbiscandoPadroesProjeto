<?php

namespace DesignPatterns\Comportamentais\Strategy\Exercicio2;

class RecomendacaoPassada implements Recomendacao
{
  public function recomendar(): array
  {
    // executa o algoritmo de regras para recomendação baseada em compras passadas
    return ["produto 1", "produto 2", "produto 3"];
  }
}