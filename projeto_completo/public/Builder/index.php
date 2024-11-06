<?php

use DesignPatterns\Criacionais\Builder\BuilderA3;
use DesignPatterns\Criacionais\Builder\BuilderA4;
use DesignPatterns\Criacionais\Builder\GeradorPDFDirector;

require_once __DIR__ . '/../../vendor/autoload.php';

echo '## Criação do objeto A4 ##<br>';
$builderA4 = new BuilderA4();
$director = new GeradorPDFDirector($builderA4);
$director->criarGeradorPDFNoHeaderNoFooter();
$pdf = $builderA4->getGeradorPDF();

//Impressão do Objeto A4
echo $pdf;

echo '<br>## Criação do objeto A3 ##<br>';
$builderA3 = new BuilderA3();
$director->setBuilderGeradorPDF($builderA3);
$director->criarGeradorPDFNoHeaderNoFooter();
$pdf = $builderA3->getGeradorPDF();

//Impressão do Objeto A3
echo $pdf;