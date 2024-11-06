<?php

namespace DesignPatterns\Criacionais\AbstractFactory;

class Boleto
{
    protected float $valor;
    protected Juros $juros;
    protected Desconto $desconto;
    protected Multa $multa;

    public function __construct(float $valor, CalculosFactory $factory)
    {
        $this->valor = $valor;
        $this->juros = $factory->criarJuros();
        $this->desconto = $factory->criarDesconto();
        $this->multa = $factory->criarMulta();
    }

    public function calcularJuros(): float
    {
        return $this->valor * $this->juros->getJuros();
    }

    public function calcularDesconto(): float
    {
        return $this->valor * $this->desconto->getDesconto();
    }

    public function calcularMulta(): float
    {
        return $this->valor * $this->multa->getMulta();
    }
}