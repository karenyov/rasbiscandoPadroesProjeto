<?php

namespace DesignPatterns\Comportamentais\State;

class PagoState implements State
{
    private Pedido $pedido;

    public function __construct(Pedido $pedido)
    {
        $this->pedido = $pedido;
    }

    public function sucessoAoPagar(): void
    {
        throw new \Exception('Operação não suportada, o pedido já foi pago');
    }

    public function despacharPedido(): void
    {
        $this->pedido->setEstadoAtual($this->pedido->getEnviado());
    }

    public function cancelarPedido(): void
    {
        $this->pedido->setEstadoAtual($this->pedido->getCancelado());
    }
}