<?php

namespace DesignPatterns\Comportamentais\State;

class Pedido
{
    private State $aguardandoPagamento;
    private State $pago;
    private State $cancelado;
    private State $enviado;

    private State $estadoAtual;

    public function __construct()
    {
        $this->aguardandoPagamento = new AguardandoPagamentoState($this);
        $this->pago = new PagoState($this);
        $this->cancelado = new CanceladoState($this);
        $this->enviado = new EnviadoState($this);

        $this->estadoAtual = $this->aguardandoPagamento;
    }

    public function realizarPagamento()
    {
        $this->estadoAtual->sucessoAoPagar();
    }

    public function cancelarPedido()
    {
       $this->estadoAtual->cancelarPedido();
    }

    public function despacharPedido()
    {
        try {
            $this->estadoAtual->despacharPedido();
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public function setEstadoAtual(State $estado)
    {
        $this->estadoAtual = $estado;
    }

    public function getAguardandoPagamento(): State
    {
        return $this->aguardandoPagamento;
    }

    public function getPago(): State
    {
        return $this->pago;
    }

    public function getCancelado(): State
    {
        return $this->cancelado;
    }

    public function getEnviado(): State
    {
        return $this->enviado;
    }
}