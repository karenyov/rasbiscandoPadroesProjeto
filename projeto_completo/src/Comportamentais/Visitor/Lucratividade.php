<?php

namespace DesignPatterns\Comportamentais\Visitor;

class Lucratividade implements Visitor
{
    public function visitSupermercado(Supermercado $supermercado): float
    {
        $lucratividade = 0;
        $departamentos = $supermercado->getDepartamentos();

        foreach ($departamentos as $departamento) {
            $produtos = $departamento->getProdutos();

            foreach ($produtos as $produto) {
                $lucratividade += $this->calculaLucratividadeProduto($produto);
            }
        }

        return $lucratividade;
    }

    public function visitDepartamento(Departamento $departamento): float
    {
        $lucratividade = 0;
        $produtos = $departamento->getProdutos();

        foreach ($produtos as $produto) {
            $lucratividade += $this->calculaLucratividadeProduto($produto);
        }

        return $lucratividade;
    }

    public function visitProduto(Produto $produto): float
    {
        return $this->calculaLucratividadeProduto($produto);
    }

    private function calculaLucratividadeProduto(Produto $produto): float
    {
        return ($produto->getPreco() * $produto->getMargemLucro()) / 100;
    }
}