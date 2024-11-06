<?php

use DesignPatterns\Estruturais\Decorator\BordaRequeijao;
use DesignPatterns\Estruturais\Decorator\MassaIntegral;
use DesignPatterns\Estruturais\Decorator\PizzaQueijo;

require_once __DIR__ . '/../../vendor/autoload.php';

$pizzaQueijo = new PizzaQueijo();

echo 'Descrição: ' . $pizzaQueijo->getDescricao() . '<br>';
echo 'Preço: R$' . $pizzaQueijo->getPreco() . '<br><br>';

$pizzaQueijoBordaRequeijao = new BordaRequeijao($pizzaQueijo);

echo 'Descrição: ' . $pizzaQueijoBordaRequeijao->getDescricao() . '<br>';
echo 'Preço: R$' . $pizzaQueijoBordaRequeijao->getPreco() . '<br><br>';

$pizzaQueijoBordaRequeijaoMassaIntegral = new MassaIntegral($pizzaQueijoBordaRequeijao);

echo 'Descrição: ' . $pizzaQueijoBordaRequeijaoMassaIntegral->getDescricao() . '<br>';
echo 'Preço: R$' . $pizzaQueijoBordaRequeijaoMassaIntegral->getPreco() . '<br>';