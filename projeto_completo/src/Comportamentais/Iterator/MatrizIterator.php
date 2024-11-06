<?php

namespace DesignPatterns\Comportamentais\Iterator;

class MatrizIterator implements Iterator
{
    private Matriz $matriz;
    private int $indiceLinha = 0;
    private int $indiceColuna = 0;
    private int $quantidadeLinhas;
    private int $quantidadeColunas;

    public function __construct(Matriz $matriz)
    {
        $this->matriz = $matriz;
        $this->quantidadeLinhas = $matriz->getQuantidadeLinhas();
        $this->quantidadeColunas = $matriz->getQuantidadeColunas();
    }

    public function incrementarIndice(): void
    {
        //Se chegou ao limite de colunas.
        if ($this->indiceColuna == ($this->quantidadeColunas - 1)) {
            $this->indiceLinha = $this->indiceLinha + 1;
            $this->indiceColuna = 0;
        } else {
            $this->indiceColuna = $this->indiceColuna + 1;
        }
    }

    public function hasNext(): bool
    {
        if ($this->indiceLinha >= $this->quantidadeLinhas) {
            return false;
        }
        return true;
    }

    public function next()
    {
        $item = $this->matriz->getItem($this->indiceLinha, $this->indiceColuna);
        $this->incrementarIndice();
        return $item;
    }
}