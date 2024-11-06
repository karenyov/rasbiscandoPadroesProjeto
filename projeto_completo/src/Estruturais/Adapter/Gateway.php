<?php

namespace DesignPatterns\Estruturais\Adapter;

interface Gateway
{
    public function setValor(float $valor): void;

    public function setParcelas(int $parcelas): void;

    public function setNumeroCartao(string $numeroCartao): void;

    public function setCVV(string $cvv): void;

    public function validarCartao(): bool;

    public function realizarPagamento(): bool;
}