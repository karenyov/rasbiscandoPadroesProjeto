<?php

use DesignPatterns\Comportamentais\Mediator\ChatBot;
use DesignPatterns\Comportamentais\Mediator\Humano;
use DesignPatterns\Comportamentais\Mediator\SalaDeChatMediator;

require_once __DIR__ . '/../../vendor/autoload.php';

$chatBot1 = new ChatBot();
$salaDeChat1 = new SalaDeChatMediator($chatBot1, 'Sala de chat 1');

$chatBot2 = new ChatBot();
$salaDeChat2 = new SalaDeChatMediator($chatBot2, 'Sala de chat 2');

$joao = new Humano("João");
$maria = new Humano("Maria");
$paulo = new Humano("Paulo");
$lucia = new Humano("Lucia");
$pedro = new Humano("Pedro");

$joao->setMediator($salaDeChat1);
$maria->setMediator($salaDeChat1);
$paulo->setMediator($salaDeChat1);

$lucia->setMediator($salaDeChat2);
$pedro->setMediator($salaDeChat2);

echo '<br>[Sala 1] João envia sua primeira mensagem'; //Instrução
$joao->enviar("Olá pessoal da sala 1, tudo bem?");

echo '<br>[Sala 2] Lucia envia sua primeira mensagem'; //Instrução
$lucia->enviar("Olá Pedro, tudo bem?");

echo '<br>[Sala 1] Paulo responde a João'; //Instrução
$paulo->enviar("Tudo bem comigo!");

echo '<br>[Sala 1] Paulo tenta enviar duas mensagens consecutivas'; //Instrução
$paulo->enviar("E com vc?");

echo '<br>[Sala 2] Pedro não responde, Lucia tentar enviar outra mensagem'; //Instrução
$lucia->enviar("Pedro, vc ta ai?");

echo '<br>Lucia troca de sala de chat';//Instrução
$lucia->setMediator($salaDeChat1);

echo '<br>[Sala 1] Lucia envia sua primeira mensagem na sala 1'; //Instrução
$lucia->enviar("Olá pessoa da sala 1, sou a Lucia. Tudo bem?");

echo '<br>[Sala 1] Lucia envia sua primeira mensagem na sala 1'; //Instrução
$lucia->enviar("Olá pessoa da sala 1, sou a Lucia. Tudo bem?");