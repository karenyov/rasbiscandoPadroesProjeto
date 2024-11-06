<?php

namespace DesignPatterns\Comportamentais\Visitor;

class Departamento implements Elemento
{
    private string $nome;
    private array $produtos;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    public function addProduto(Produto $produto)
    {
        $this->produtos[] = $produto;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getProdutos(): array
    {
        return $this->produtos;
    }

    public function aceitar(Visitor $visitor): float
    {
        return $visitor->visitDepartamento($this);
    }
}