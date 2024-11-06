<?php

namespace DesignPatterns\Estruturais\Flyweight;

class Arvore
{
    private int $x;
    private int $y;
    private EspecieFlyweight $flyweight;

    public function __construct(int $x, int $y, EspecieFlyweight $flyweight)
    {
        $this->x = $x;
        $this->y = $y;
        $this->flyweight = $flyweight;
    }

    public function retornaArvore(): array
    {
        return [
            'x' => $this->x,
            'y' => $this->y,
            'especie' => $this->flyweight->retornaEspecie()
        ];
    }
}
