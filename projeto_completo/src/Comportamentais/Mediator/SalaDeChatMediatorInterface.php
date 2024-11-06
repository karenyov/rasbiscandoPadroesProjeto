<?php

namespace DesignPatterns\Comportamentais\Mediator;

interface SalaDeChatMediatorInterface
{
    public function __construct(ChatBot $chatbot, string $nome);

    public function enviarMensagem(string $mensagem, Usuario $usuario): void;

    public function adicionarUsuario(Usuario $usuario): void;

    public function removerUsuario(Usuario $usuario): void;

    public function getNome(): string;
}