<?php

namespace DesignPatterns\Comportamentais\Visitor;

interface Visitor
{
    public function visitSupermercado(Supermercado $supermercado): float;

    public function visitDepartamento(Departamento $departamento): float;

    public function visitProduto(Produto $produto): float;
}