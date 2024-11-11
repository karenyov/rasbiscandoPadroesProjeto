<?php

namespace DesignPatterns\Comportamentais\Strategy\Exercicio2;

abstract class Cliente
{
  private int $nivel;

  private Recomendacao $tipoRecomendacao;

  public function getNivel(): int
  {
      return $this->nivel;
  }

  public function setNivel(int $nivel): self
  {
      $this->nivel = $nivel;

      return $this;
  }

  public function setTipoRecomendacao(Recomendacao $recomendacao) : self
  {
      $this->tipoRecomendacao = $recomendacao;

      return $this;
  }

  public function recomendar(): array
  {
      return $this->tipoRecomendacao->recomendar();
  }
}