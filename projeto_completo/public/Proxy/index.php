<?php

use DesignPatterns\Estruturais\Proxy\Usuario;

require_once __DIR__ . '/../../vendor/autoload.php';

$inicio = microtime(true);

//Criação do Usuário
$pessoaFisica = new Usuario('João da Silva', '12345678912', 25);
echo $pessoaFisica->getIdade();

echo '<br> # ' . round(microtime(true) - $inicio, 2) . " Segundos<br>";