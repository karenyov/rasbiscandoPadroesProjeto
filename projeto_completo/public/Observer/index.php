<?php

use DesignPatterns\Comportamentais\Observer\Cliente;
use DesignPatterns\Comportamentais\Observer\Fornecedor;
use DesignPatterns\Comportamentais\Observer\Funcionario;
use DesignPatterns\Comportamentais\Observer\Newsletter;
use DesignPatterns\Comportamentais\Observer\Parceiro;

require_once __DIR__ . '/../../vendor/autoload.php';

$newsletter = new Newsletter();

$funcionario1 = new Funcionario('Funcionario 1', 'funcionario1@email.com', $newsletter);
$funcionario2 = new Funcionario('Funcionario 2', 'funcionario2@email.com', $newsletter);

$cliente = new Cliente('Cliente 1', 'cliente1@email.com', $newsletter);

$parceiro = new Parceiro('Parceiro 1', 'parceiro1@email.com', $newsletter);

$fornecedor = new Fornecedor('Fornecedor 1', 'fornecedor1@email.com', $newsletter);

$newsletter->addMensagen('Primeira Mensagem');
echo '######<br><br>';

$newsletter->removeObserver($funcionario2);

$newsletter->addMensagen('Segunda Mensagem');
echo '######<br><br>';

$newsletter->removeObserver($parceiro);

$newsletter->addMensagen('Terceira Mensagem');
echo '######<br><br>';

$newsletter->registerObserver($funcionario2);

$newsletter->addMensagen('Quarta Mensagem');
echo '######<br><br>';

$newsletter->notifyObservers();
