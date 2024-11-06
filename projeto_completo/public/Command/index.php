<?php

use DesignPatterns\Comportamentais\Command\Aplicativo;
use DesignPatterns\Comportamentais\Command\DesligarArCondicionado;
use DesignPatterns\Comportamentais\Command\DesligarLampada;
use DesignPatterns\Comportamentais\Command\Fabricante\ArCondicionado;
use DesignPatterns\Comportamentais\Command\Fabricante\Lampada;
use DesignPatterns\Comportamentais\Command\LigarArCondicionado;
use DesignPatterns\Comportamentais\Command\LigarLampada;
use DesignPatterns\Comportamentais\Command\MudarTemperaturaArCondicionado;

require_once __DIR__ . '/../../vendor/autoload.php';

$lampadaSala = new Lampada('Lampada da Sala', false);

$lampadaQuarto = new Lampada('Lampada do Quarto', false);

$arCondicionado = new ArCondicionado('Ar-condicionado', false, 26);

$aplicativo = new Aplicativo();


$ligarLampadaSala = new LigarLampada($lampadaSala);
$desligarLampadaSala = new DesligarLampada($lampadaSala);

$ligarLampadaQuarto = new LigarLampada($lampadaQuarto);
$desligarLampadaQuarto = new DesligarLampada($lampadaQuarto);

$ligarAr = new LigarArCondicionado($arCondicionado);
$desligarAr = new DesligarArCondicionado($arCondicionado);
$mudarTemperaturaAr = new MudarTemperaturaArCondicionado($arCondicionado);


$idLigarLampadaSala = $aplicativo->setComando($ligarLampadaSala);
$idDesligarLampadaSala = $aplicativo->setComando($desligarLampadaSala);

$idLigarLampadaQuarto = $aplicativo->setComando($ligarLampadaQuarto);
$idDesligarLampadaQuarto = $aplicativo->setComando($desligarLampadaQuarto);

$idLigarAr = $aplicativo->setComando($ligarAr);
$idDesligarAr = $aplicativo->setComando($desligarAr);
$idMudarTemperaturaAr = $aplicativo->setComando($mudarTemperaturaAr);


$aplicativo->aoPrecionarBotao($idLigarLampadaSala);
$aplicativo->aoPrecionarBotao($idDesligarLampadaSala);

$aplicativo->aoPrecionarBotao($idLigarLampadaQuarto);
$aplicativo->aoPrecionarBotao($idDesligarLampadaQuarto);

$aplicativo->aoPrecionarBotao($idLigarAr);
$aplicativo->getComando($idMudarTemperaturaAr)->setTemperatura(25);
$aplicativo->aoPrecionarBotao($idMudarTemperaturaAr);

$aplicativo->aoPrecionarBotao($idDesligarAr);

echo "<br>### Desfazer Comandos ###<br><br>";

$aplicativo->duploCliqueBotao($idDesligarAr);
$aplicativo->duploCliqueBotao($idMudarTemperaturaAr);
$aplicativo->duploCliqueBotao($idDesligarLampadaQuarto);
$aplicativo->duploCliqueBotao($idLigarLampadaSala);