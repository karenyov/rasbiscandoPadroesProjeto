<?php

namespace DesignPatterns\Comportamentais\Strategy\Exercicio1;

abstract class Transporte
{
    private float $distancia;
    private Tarifa $tipoTarifa;

    public function getDistancia(): float
    {
        return $this->distancia;
    }

    public function setDistancia(float $distancia): self
    {
        $this->distancia = $distancia;

        return $this;
    }

    
    public function setTipoTarifa(Tarifa $tarifa) : self
    {
        $this->tipoTarifa = $tarifa;

        return $this;
    }

    public function calcularTarifa(): float
    {
        return $this->tipoTarifa->calcular($this->distancia);
    }
}