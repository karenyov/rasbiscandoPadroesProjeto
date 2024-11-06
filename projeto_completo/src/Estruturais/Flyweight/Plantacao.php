<?php

namespace DesignPatterns\Estruturais\Flyweight;

class Plantacao
{
    private array $arvores;
    private EspecieFabrica $especieFabrica;

    public function __construct()
    {
        $this->especieFabrica = new EspecieFabrica();
    }

    public function addArvore(
        int $x,
        int $y,
        string $nome,
        string $cor,
        float $alturaMaxima
    ): void {
        $especie = $this->especieFabrica->getEspecie($nome, $cor, $alturaMaxima);
        $arvore = new Arvore($x, $y, $especie);
        $this->arvores[] = $arvore;
    }

    public function retornaEspecies(): array
    {
        $especies = $this->especieFabrica->retornaTodasEspecies();
        $especiesArray = [];
        foreach ($especies as $especie) {
            $especiesArray[] = $especie->retornaEspecie();
        }

        return $especiesArray;
    }

    public function retornaArvores(): array
    {
        $arvoresArray = [];
        foreach ($this->arvores as $arvore) {
            $arvoresArray[] = $arvore->retornaArvore();
        }

        return $arvoresArray;
    }
}
