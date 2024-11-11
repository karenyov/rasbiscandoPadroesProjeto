<?php

namespace DesignPatterns\Comportamentais\Strategy\Exercicio3;

abstract class Compra
{
  private float $valor;

  private Desconto $tipoDesconto;

  public function getValor(): int
  {
      return $this->valor;
  }

  public function setValor(int $valor): self
  {
      $this->valor = $valor;

      return $this;
  }

  public function setTipoDesconto(Desconto $desconto) : self
  {
      $this->tipoDesconto = $desconto;

      return $this;
  }

  public function calcularValorFinal(): float
  {
      return $this->tipoDesconto->calcular($this->valor);
  }
}