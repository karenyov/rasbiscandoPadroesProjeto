<?php

namespace DesignPatterns\Comportamentais\Iterator;

class Lista implements Agregado
{
    private array $lista = [];
    private int $tamanho;

    public function __construct(int $tamanhoMaximo)
    {
        $this->tamanho = $tamanhoMaximo;
    }

    public function addItem($item): bool
    {
        if (count($this->lista) < $this->tamanho) {
            $this->lista[] = $item;
            return true;
        }

        return false;
    }

    public function getItem(int $indice)
    {
        return $this->lista[$indice];
    }

    public function getTamanho(): int
    {
        return $this->tamanho;
    }

    public function createIterator(): Iterator
    {
        return new ListaIterator($this);
    }
}