<?php

namespace DesignPatterns\Comportamentais\Visitor;

class Supermercado implements Elemento
{
    private string $nome;
    private array $departamentos;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    public function addDepartamento(Departamento $departamento)
    {
        $this->departamentos[] = $departamento;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getDepartamentos(): array
    {
        return $this->departamentos;
    }

    public function aceitar(Visitor $visitor): float
    {
        return $visitor->visitSupermercado($this);
    }
}