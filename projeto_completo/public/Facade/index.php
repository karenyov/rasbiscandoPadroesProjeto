<?php

use DesignPatterns\Estruturais\Facade\Consumidor;
use DesignPatterns\Estruturais\Facade\Produto;
use DesignPatterns\Estruturais\Facade\Vendas\VendaFacade;

require_once __DIR__ . "/../../vendor/autoload.php";

//Criação do consumidor.
$consumidor = new Consumidor('Luiz da Silva', 12345678910, 'luiz@email.com');

//Criação de produtos.
$produto1 = new Produto('Blusa Rosa', 'Blusa feminina rosa', 80.99);
$produto2 = new Produto('Camiseta Preta', 'Camiseta masculina preta', 49.90);
$produto3 = new Produto('Calça Jeans', 'Calça Jeans Masculina', 119.90);

// ==== Até aqui apenas criamos os objetos básicos que uma venda precisa. ====
// ==== Agora vamos ao processo de venda propriamente dito. ====
$vendaFacade = new VendaFacade($consumidor);

//Adição dos produtos ao pedido.
$vendaFacade->addProduto($produto1);
$vendaFacade->addProduto($produto2);
$vendaFacade->addProduto($produto3);

$vendaFacade->pedidoCredito();