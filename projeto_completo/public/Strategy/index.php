<?php

use DesignPatterns\Comportamentais\Strategy\FreteComum;
use DesignPatterns\Comportamentais\Strategy\FreteExpresso;
use DesignPatterns\Comportamentais\Strategy\PedidoEletronicos;

require_once __DIR__ . '/../../vendor/autoload.php';

$pedido = new PedidoEletronicos();
$pedido->setValor(100);

$freteComum = new FreteComum();
$freteExpresso = new FreteExpresso();

$pedido->setTipoFrete($freteExpresso);
echo 'Frete Comum: R$' . $pedido->calculaFrete() . '<br>';



/*

echo 'Frete Comum: R$' . $pedido->calculaFreteComum() . '<br>';
echo 'Frete Expresso: R$' . $pedido->calculaFreteExpresso() . '<br>';

$pedido = new PedidoMoveis();
$pedido->setValor(100);

echo 'Frete Comum: R$' . $pedido->calculaFreteComum() . '<br>';
try {
    echo 'Frete Expresso: R$' . $pedido->calculaFreteExpresso() . '<br>';
} catch (Exception $e) {
    echo $e;
}
*/