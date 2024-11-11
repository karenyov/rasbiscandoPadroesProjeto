<?php

use DesignPatterns\Comportamentais\Strategy\Exercicio1\Onibus;
use DesignPatterns\Comportamentais\Strategy\Exercicio1\TarifaOnibus;
use DesignPatterns\Comportamentais\Strategy\Exercicio2\Passada;
use DesignPatterns\Comportamentais\Strategy\Exercicio2\RecomendacaoPassada;
use DesignPatterns\Comportamentais\Strategy\Exercicio3\DescontoFidelidade;
use DesignPatterns\Comportamentais\Strategy\Exercicio3\Fidelidade;
use DesignPatterns\Comportamentais\Strategy\Exercicio4\BH;
use DesignPatterns\Comportamentais\Strategy\Exercicio4\ImpostoBH;
use DesignPatterns\Comportamentais\Strategy\FreteComum;
use DesignPatterns\Comportamentais\Strategy\FreteExpresso;
use DesignPatterns\Comportamentais\Strategy\PedidoEletronicos;

require_once __DIR__ . '/../../vendor/autoload.php';

$pedido = new PedidoEletronicos();
$pedido->setValor(100);

$freteComum = new FreteComum();
$freteExpresso = new FreteExpresso();

$pedido->setTipoFrete($freteExpresso);

echo "<h3>Frete</h3>";
echo 'Frete Comum: R$' . $pedido->calculaFrete() . '<br>';


$onibus = new Onibus();
$onibus->setDistancia(100);
$onibus->setNumero('123');
$onibus->setTipoTarifa(new TarifaOnibus());

echo "<h3>Tarifa</h3>";
echo 'Tarifa ônibus: ' . $onibus->calcularTarifa() . ' reais <br>';


$passada = new Passada();
$passada->setDescricao('Passada');
$passada->setTipoRecomendacao(new RecomendacaoPassada());

echo "<h3>Recomendação	</h3>";
echo 'Recomendação passada: ' . json_encode($passada->recomendar(), JSON_PRETTY_PRINT) . ' <br>';


$desconto = new Fidelidade();
$desconto->setDescricao('Desconto Fidelidade');
$desconto->setTipoDesconto(new DescontoFidelidade());
$desconto->setValor(100);

echo "<h3>Desconto	</h3>";
echo 'Desconto fidelidade: ' . $desconto->calcularValorFinal() . ' reais <br>';


$imposto = new BH();
$imposto->setDescricao('Imposto BH');
$imposto->setValor(100);
$imposto->setTipoDesconto(new ImpostoBH());

echo "<h3>Imposto	</h3>";
echo 'Imposto BH: ' . $imposto->calcularImposto() . ' reais <br>';

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