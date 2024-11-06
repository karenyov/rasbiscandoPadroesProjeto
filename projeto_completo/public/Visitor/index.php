<?php

use DesignPatterns\Comportamentais\Visitor\Departamento;
use DesignPatterns\Comportamentais\Visitor\Lucratividade;
use DesignPatterns\Comportamentais\Visitor\Produto;
use DesignPatterns\Comportamentais\Visitor\Supermercado;

require_once __DIR__ . "/../../vendor/autoload.php";

//Criação do supermercado
$supermercado = new Supermercado('Supermercado Esquina');

//Criação do departamento 1 e seus produtos
$departamento_1 = new Departamento('Alimentação Básica');
$arroz = new Produto('Arroz 5Kg', 18, 30);
$macarrao = new Produto('Macarrão', 3.20, 15);

//Adição dos produtos ao departamento 1
$departamento_1->addProduto($arroz);
$departamento_1->addProduto($macarrao);

//Criação do departamento 2 e seus produtos
$departamento_2 = new Departamento('Higiene');
$papelHigienico = new Produto('Papel Higiênico', 11, 35);
$sabonete = new Produto('Sabonete', 1.20, 10);

//Adição dos produtos ao departamento 2
$departamento_2->addProduto($papelHigienico);
$departamento_2->addProduto($sabonete);

//Adição dos departamentos ao supermercado
$supermercado->addDepartamento($departamento_1);
$supermercado->addDepartamento($departamento_2);

$lucratividade = new Lucratividade();

$lucratividadeSupermercado = $supermercado->aceitar($lucratividade);
echo "Lucratividade Supermercado: R$" . $lucratividadeSupermercado . "<br><br>";

$lucratividadeDepartamento1 = $departamento_1->aceitar($lucratividade);
echo "Lucratividade Departamento 1: R$" . $lucratividadeDepartamento1 . "<br><br>";

$lucratividadeArroz = $arroz->aceitar($lucratividade);
echo "Lucratividade Arroz 1: R$" . $lucratividadeArroz . "<br><br>";

$lucratividadeMacarrao = $macarrao->aceitar($lucratividade);
echo "Lucratividade Macarrão 1: R$" . $lucratividadeMacarrao . "<br><br>";

$lucratividadeDepartamento2 = $departamento_2->aceitar($lucratividade);
echo 'Lucratividade Departamento 2: R$' . $lucratividadeDepartamento2 . '<br><br>';

$lucratividadePapelHigienico = $papelHigienico->aceitar($lucratividade);
echo 'Lucratividade Papel Higiênico: R$' . $lucratividadePapelHigienico . '<br><br>';

$lucratividadeSabonete = $sabonete->aceitar($lucratividade);
echo 'Lucratividade Sabonete: R$' . $lucratividadeSabonete . '<br><br>';
