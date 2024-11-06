<?php

namespace DesignPatterns\Comportamentais\Iterator;

class ListaIterator implements Iterator
{
    private Lista $lista;
    private int $indice = 0;
    private int $tamanho;

    public function __construct(Lista $lista)
    {
        $this->lista = $lista;
        $this->tamanho = $lista->getTamanho();
    }

    public function hasNext(): bool
    {
        if ($this->indice >= $this->tamanho) {
            return false;
        }
        return true;
    }

    public function next()
    {
        $item = $this->lista->getItem($this->indice);
        $this->indice = $this->indice + 1;
        return $item;
    }
}