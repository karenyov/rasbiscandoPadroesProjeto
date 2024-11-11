<?php

namespace DesignPatterns\Comportamentais\Strategy\Exercicio3;

class Sazonal extends Compra {

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