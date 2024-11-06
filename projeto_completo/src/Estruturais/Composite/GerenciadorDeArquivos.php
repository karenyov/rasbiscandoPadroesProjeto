<?php

namespace DesignPatterns\Estruturais\Composite;

class GerenciadorDeArquivos
{
    private Component $raiz;

    public function __construct(Component $raiz)
    {
        $this->raiz = $raiz;
    }

    public function exibirTodos(): void
    {
        $this->raiz->exibir();
    }
}