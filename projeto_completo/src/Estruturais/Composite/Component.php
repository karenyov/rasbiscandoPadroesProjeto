<?php

namespace DesignPatterns\Estruturais\Composite;

abstract class Component
{
    public function adicionar(Component $componente): void
    {
        throw new UnsupportedOperationException();
    }

    public function remove(Component $componente): void
    {
        throw new UnsupportedOperationException();
    }

    public function recuperarFilho(int $indice): Component
    {
        throw new UnsupportedOperationException();
    }

    public function exibir(): void
    {
        throw new UnsupportedOperationException();
    }

    public function getNome(): string
    {
        throw new UnsupportedOperationException();
    }

    public function getCaminho(): string
    {
        throw new UnsupportedOperationException();
    }
}