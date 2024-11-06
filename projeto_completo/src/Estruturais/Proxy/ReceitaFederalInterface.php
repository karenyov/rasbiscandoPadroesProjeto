<?php

namespace DesignPatterns\Estruturais\Proxy;

interface ReceitaFederalInterface
{
    public function __construct(string $cpf);

    public function getNome(): string;

    public function getIdade(): int;

    public function CPFAtivo(): bool;
}