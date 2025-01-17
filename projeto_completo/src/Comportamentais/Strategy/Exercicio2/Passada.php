<?php

namespace DesignPatterns\Comportamentais\Strategy\Exercicio2;

class Passada extends Cliente {

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