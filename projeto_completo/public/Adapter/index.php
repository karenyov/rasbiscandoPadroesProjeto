<?php

use DesignPatterns\Estruturais\Adapter\Cobranca;
use DesignPatterns\Estruturais\Adapter\PagFacilAdapter;
use DesignPatterns\Estruturais\Adapter\Terceiros\PagFacil;
use DesignPatterns\Estruturais\Adapter\Terceiros\TopPagamentos;
use DesignPatterns\Estruturais\Adapter\TopPagamentosAdapter;

require_once __DIR__ . '/../../vendor/autoload.php';

$pagFacilAdapter = new PagFacilAdapter();

$topPagamentos = new TopPagamentos();
$topPagamentosAdapter = new TopPagamentosAdapter($topPagamentos);

$cobranca = new Cobranca($pagFacilAdapter);

$cobranca->setValor(100);
$cobranca->setParcelas(3);
$cobranca->setNumeroCartao(1234123412341234);
$cobranca->setCVV(123);

if ($cobranca->realizarPagamento()) {
    echo ' - sucesso <br>';
} else {
    echo ' -  falha <br>';
}

$cobranca->setGateway($topPagamentosAdapter);

$cobranca->setValor(100);
$cobranca->setParcelas(3);
$cobranca->setNumeroCartao(1234123412341234);
$cobranca->setCVV(123);

if ($cobranca->realizarPagamento()) {
    echo ' - sucesso <br>';
} else {
    echo ' -  falha <br>';
}