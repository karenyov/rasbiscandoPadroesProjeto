<?php

namespace DesignPatterns\Comportamentais\State;

class EnviadoState implements State
{
    private Pedido $pedido;

    public function __construct(Pedido $pedido)
    {
        $this->pedido = $pedido;
    }

    public function sucessoAoPagar(): void
    {
        throw new \Exception('Operação não suportada, o pedido já foi pago e enviado');
    }

    public function despacharPedido(): void
    {
        throw new \Exception('Operação não suportada, o pedido já enviado');
    }

    public function cancelarPedido(): void
    {
        throw new \Exception('Operação não suportada, o pedido já enviado');
    }
}