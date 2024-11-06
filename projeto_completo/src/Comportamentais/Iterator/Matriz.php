<?php

namespace DesignPatterns\Comportamentais\Iterator;

class Matriz implements Agregado
{
    private array $matriz = [];
    private int $quantidadeLinhas;
    private int $quantidadeColunas;
    private int $linhaAtual = 0;
    private int $colunaAtual = 0;

    public function __construct(int $quantidadeLinhas, int $quantidadeColunas)
    {
        $this->quantidadeLinhas = $quantidadeLinhas;
        $this->quantidadeColunas = $quantidadeColunas;
    }

    public function addItem($item): bool
    {
        //Se chegou na ultima linha e ultima coluna
        if (
            $this->linhaAtual == ($this->quantidadeLinhas - 1)
            && $this->colunaAtual == $this->quantidadeColunas
        ) {
            return false;
        }

        if ($this->colunaAtual == ($this->quantidadeColunas)) {
            $this->linhaAtual = $this->linhaAtual + 1;
            $this->colunaAtual = 0;
        }

        $this->matriz[$this->linhaAtual][$this->colunaAtual] = $item;
        $this->colunaAtual = $this->colunaAtual + 1;
        return true;
    }

    public function getItem(int $linha, int $coluna)
    {
        return $this->matriz[$linha][$coluna];
    }

    public function getQuantidadeLinhas(): int
    {
        return $this->quantidadeLinhas;
    }

    public function getQuantidadeColunas(): int
    {
        return $this->quantidadeColunas;
    }

    public function createIterator(): Iterator
    {
        return new MatrizIterator($this);
    }
}