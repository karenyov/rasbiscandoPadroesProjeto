<?php

use DesignPatterns\Criacionais\Prototype\GerenciadorDePrototipos;
use DesignPatterns\Criacionais\Prototype\Livro;

require_once __DIR__ . "/../../vendor/autoload.php";

echo '<pre>';

$gerenciadorPrototipos = new GerenciadorDePrototipos();

$livroPrototipo = $gerenciadorPrototipos->getInstance('livro');

$livro1 = $livroPrototipo->clone();

echo '==== Livro 1 ====<br>';

echo '<br><br>==== Livro 1 com valores padrao. ====<br>';
echo $livro1;

$livro1->setNome('Livro 1');
$livro1->setAutor('Lucas da Silva');
$livro1->setNumeroPaginas(325);

echo '<br><br>==== Livro 1 com valores editados. ====<br>';
echo $livro1;

$livro2 = $livroPrototipo->clone();

echo '<br><br>==== Livro 2 com valores padrao. ====<br>';
echo $livro2;

$livro2->setNome('Livro 2');
$livro2->setAutor('Marlene dos Santos');
$livro2->setNumeroPaginas(420);

echo '<br><br>==== Livro 1 e 2 com valores editados. ====<br>';
echo $livro1;
echo '<br>';
echo $livro2;

echo '</pre>';
