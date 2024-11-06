<?php

namespace DesignPatterns\Comportamentais\State;

class AguardandoPagamentoState implements State
{
    private Pedido $pedido;

    public function __construct(Pedido $pedido)
    {
        $this->pedido = $pedido;
    }

    public function sucessoAoPagar(): void
    {
        $this->pedido->setEstadoAtual($this->pedido->getPago());
    }

    public function despacharPedido(): void
    {
        throw new \Exception('Operação não suportada, o pedido ainda não foi pago');
    }

    public function cancelarPedido(): void
    {
        $this->pedido->setEstadoAtual($this->pedido->getCancelado());
    }
}