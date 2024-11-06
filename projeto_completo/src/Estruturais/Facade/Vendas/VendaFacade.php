<?php

namespace DesignPatterns\Estruturais\Facade\Vendas;

use DesignPatterns\Estruturais\Facade\Consumidor;
use DesignPatterns\Estruturais\Facade\Produto;

class VendaFacade
{
    private Pedido $pedido;
    private Pagamento $pagamento;
    private EmailPedido $email;

    public function __construct(Consumidor $consumidor)
    {
        $this->pedido = new Pedido($consumidor);
        $this->email = new EmailPedido($this->pedido);
    }

    public function addProduto(Produto $produto): void
    {
        $this->pedido->addProduto($produto);
    }

    public function pedidoCredito(): void
    {
        $this->pagamento = new PagamentoCredito($this->pedido);
        if ($this->pagamento->realizarPagamento()) {
            $this->email->enviarEmail('Pagamento realizado com sucesso via crédito');
        } else {
            $this->email->enviarEmail('Falha no pagamento via crédito');
        }
    }

    public function pedidoBoleto(): void
    {
        $this->pagamento = new PagamentoBoleto($this->pedido);
        if ($this->pagamento->realizarPagamento()) {
            $this->email->enviarEmail('Pagamento realizado com sucesso via boleto');
        } else {
            $this->email->enviarEmail('Falha no pagamento do boleto');
        }
    }
}