<?php

namespace DesignPatterns\Criacionais\AbstractFactory;

class Banco
{
    public function gerarBoleto(float $valor, CalculosFactory $factory): Boleto
    {
        $boleto = new Boleto($valor, $factory);

        echo 'Boleto gerado com sucesso no valor de R$ ' . $valor . '<br>';
        echo 'Valor Juros: R$' . $boleto->calcularJuros() . '<br>';
        echo 'Valor Desconto: R$' . $boleto->calcularDesconto() . '<br>';
        echo 'Valor Multa: R$' . $boleto->calcularMulta() . '<br>';
        echo '---------------' . '<br><br>';

        return $boleto;
    }
}