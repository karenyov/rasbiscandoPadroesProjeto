<?php

namespace DesignPatterns\Comportamentais\Strategy\Exercicio4;

abstract class Venda
{
  private float $valor;

  private Imposto $tipoImposto;

  public function getValor(): int
  {
      return $this->valor;
  }

  public function setValor(int $valor): self
  {
      $this->valor = $valor;

      return $this;
  }

  public function setTipoDesconto(Imposto $imposto) : self
  {
      $this->tipoImposto = $imposto;

      return $this;
  }

  public function calcularImposto(): float
  {
      return $this->tipoImposto->calcular($this->valor);
  }
}