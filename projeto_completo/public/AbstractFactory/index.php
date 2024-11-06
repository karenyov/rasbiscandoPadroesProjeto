<?php

use DesignPatterns\Criacionais\AbstractFactory\Banco;
use DesignPatterns\Criacionais\AbstractFactory\BancoDoBrasil\BBCalculosFactory;
use DesignPatterns\Criacionais\AbstractFactory\Caixa\CaixaCalculosFactory;

require_once __DIR__ . '/../../vendor/autoload.php';

$banco = new Banco();

echo '######## Banco Caixa ########<br>';

$factoryCaixa = new CaixaCalculosFactory();
$banco->gerarBoleto(100, $factoryCaixa);

echo '######## Banco do Brasil ########<br>';

$factoryBB = new BBCalculosFactory();
$banco->gerarBoleto(100, $factoryBB);