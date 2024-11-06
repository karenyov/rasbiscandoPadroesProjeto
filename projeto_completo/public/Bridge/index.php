<?php

use DesignPatterns\Estruturais\Bridge\Email;
use DesignPatterns\Estruturais\Bridge\MensagemAdmin;
use DesignPatterns\Estruturais\Bridge\MensagemUsuario;
use DesignPatterns\Estruturais\Bridge\SMS;

require_once __DIR__ . '/../../vendor/autoload.php';

$canalEnvio = new Email();

$mensagem = new MensagemAdmin($canalEnvio);
$mensagem->setAssunto('Primeira mensagem');
$mensagem->setMensagem('Olá Usuário');
$mensagem->enviar();

$mensagem = new MensagemUsuario($canalEnvio);
$mensagem->setAssunto('Primeira mensagem');
$mensagem->setMensagem('Olá Administrador');
$mensagem->enviar();

$canalEnvio = new SMS();

$mensagem = new MensagemAdmin($canalEnvio);
$mensagem->setAssunto('Segunda mensagem');
$mensagem->setMensagem('Olá Usuário');
$mensagem->enviar();

$mensagem = new MensagemUsuario($canalEnvio);
$mensagem->setAssunto('Segunda mensagem');
$mensagem->setMensagem('Olá Administrador');
$mensagem->enviar();