<?php

namespace DesignPatterns\Comportamentais\Strategy\Exercicio4;

class SP extends Venda {

    public string $descricao;

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    
    public function setDescricao(string $descricao) : self
    {
        $this->descricao = $descricao;

        return $this;
    }
}