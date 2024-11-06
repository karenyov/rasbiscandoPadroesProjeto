<?php

namespace DesignPatterns\Estruturais\Adapter;

use DesignPatterns\Estruturais\Adapter\Terceiros\TopPagamentos;

class TopPagamentosAdapter implements Gateway
{
    private TopPagamentos $topPagamentos;
    private ?string $numeroCartao = null;
    private ?string $cvv = null;

    public function __construct(TopPagamentos $topPagamentos)
    {
        $this->topPagamentos = $topPagamentos;
    }

    public function setValor(float $valor): void
    {
        $this->topPagamentos->setValorTotal($valor);
    }

    public function setParcelas(int $parcelas): void
    {
        $this->topPagamentos->setQuantidadeParcelas($parcelas);
    }

    public function setNumeroCartao(string $numeroCartao): void
    {
        $this->numeroCartao = $numeroCartao;

        if ($this->cvv != null) {
            $this->topPagamentos->setCartao($this->numeroCartao, $this->cvv);
        }
    }

    public function setCVV(string $cvv): void
    {
        $this->cvv = $cvv;

        if ($this->numeroCartao != null) {
            $this->topPagamentos->setCartao($this->numeroCartao, $this->cvv);
        }
    }

    public function validarCartao(): bool
    {
        return true;
    }

    public function realizarPagamento(): bool
    {
        return $this->topPagamentos->realizarPagamento();
    }
}