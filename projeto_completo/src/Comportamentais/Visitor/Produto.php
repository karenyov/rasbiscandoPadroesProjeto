<?php

namespace DesignPatterns\Comportamentais\Visitor;

class Produto implements Elemento
{
    private string $nome;
    private float $preco;
    private float $margemLucro;

    public function __construct(string $nome, float $preco, float $margemLucro)
    {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->margemLucro = $margemLucro;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getPreco(): float
    {
        return $this->preco;
    }

    public function getMargemLucro(): float
    {
        return $this->margemLucro;
    }

    public function aceitar(Visitor $visitor): float
    {
        return $visitor->visitProduto($this);
    }
}