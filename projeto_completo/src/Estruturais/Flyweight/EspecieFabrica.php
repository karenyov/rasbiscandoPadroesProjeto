<?php

namespace DesignPatterns\Estruturais\Flyweight;

class EspecieFabrica
{
    private array $especies = [];

    public function getEspecie(string $nome, string $cor, float $alturaMaxima): EspecieFlyweight
    {
        foreach ($this->especies as $e) {
            if (
                $e->getNome() == $nome &&
                $e->getCor() == $cor &&
                $e->getAlturaMaxima() == $alturaMaxima
            ) {
                return $e;
            }
        }

        $novaEspecie = new EspecieFlyweight($nome, $cor, $alturaMaxima);
        $this->especies[] = $novaEspecie;
        return $novaEspecie;
    }

    public function retornaTodasEspecies(): array
    {
        return $this->especies;
    }
}