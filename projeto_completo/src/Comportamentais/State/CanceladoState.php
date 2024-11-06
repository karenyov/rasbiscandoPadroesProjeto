<?php

namespace DesignPatterns\Comportamentais\State;

class CanceladoState implements State
{
    private Pedido $pedido;

    public function __construct(Pedido $pedido)
    {
        $this->pedido = $pedido;
    }

    public function sucessoAoPagar(): void
    {
        throw new \Exception('Operação não suportada, o pedido se encontra cancelado');
    }

    public function despacharPedido(): void
    {
        throw new \Exception('Operação não suportada, o pedido se encontra cancelado');
    }

    public function cancelarPedido(): void
    {
        throw new \Exception('Operação não suportada, o pedido já se encontra cancelado');
    }
}