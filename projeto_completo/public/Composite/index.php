<?php

use DesignPatterns\Estruturais\Composite\Arquivo;
use DesignPatterns\Estruturais\Composite\GerenciadorDeArquivos;
use DesignPatterns\Estruturais\Composite\Pasta;

require_once __DIR__ . '/../../vendor/autoload.php';

//Criação da pasta raiz e demais pastas
$raiz = new Pasta('Raiz', '/');
$pasta1 = new Pasta('Pasta 1', 'pasta1/');
$pasta2 = new Pasta('Pasta 2', 'pasta2/');
$pasta2_1 = new Pasta('Pasta 2.1', 'pasta2-1/');
$pasta3 = new Pasta('Pasta 3', 'pasta3/');

$raiz->adicionar($pasta1);
$raiz->adicionar($pasta2);
$raiz->adicionar($pasta3);

$pasta2->adicionar($pasta2_1);

//Criação dos arquivos.
$arquivo1 = new Arquivo('Arquivo 1', '/arquivo1');
$arquivo2 = new Arquivo('Arquivo 2', '/arquivo2');
$arquivo3 = new Arquivo('Arquivo 3', '/arquivo3');
$arquivo4 = new Arquivo('Arquivo 4', '/arquivo4');
$arquivo5 = new Arquivo('Arquivo 5', '/arquivo5');
$arquivo6 = new Arquivo('Arquivo 6', '/arquivo6');
$arquivo7 = new Arquivo('Arquivo 7', '/arquivo7');

//Adição dos arquivos as pastas conforme dita nossa Hierarquia de diretórios.
$pasta1->adicionar($arquivo1);
$pasta1->adicionar($arquivo2);
$pasta2->adicionar($arquivo3);
$pasta2->adicionar($arquivo4);
$pasta2_1->adicionar($arquivo5);
$pasta2_1->adicionar($arquivo7);
$pasta3->adicionar($arquivo6);

$gerenciador = new GerenciadorDeArquivos($raiz);

$gerenciador->exibirTodos();