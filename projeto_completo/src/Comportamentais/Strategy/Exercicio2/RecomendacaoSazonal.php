<?php

namespace DesignPatterns\Comportamentais\Strategy\Exercicio2;

class RecomendacaoSazonal implements Recomendacao
{
  public function recomendar(): array
  {
    // executa o algoritmo de regras para recomendação baseada em produtos sazonais
    return ["produto 100", "produto 2", "produto 90"];
  }
}