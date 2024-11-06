<?php

namespace DesignPatterns\Estruturais\Flyweight;

class EspecieFlyweight
{
    private string $nome;
    private string $cor;
    private float $alturaMaxima;

    public function __construct(string $nome, string $cor, float $alturaMaxima)
    {
        $this->nome = $nome;
        $this->cor = $cor;
        $this->alturaMaxima = $alturaMaxima;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCor(): string
    {
        return $this->cor;
    }

    public function getAlturaMaxima(): float
    {
        return $this->alturaMaxima;
    }

    public function retornaEspecie(): array
    {
        return [
            'nome' => $this->nome,
            'cor' => $this->cor,
            'alturaMaxima' => $this->alturaMaxima
        ];
    }
}
