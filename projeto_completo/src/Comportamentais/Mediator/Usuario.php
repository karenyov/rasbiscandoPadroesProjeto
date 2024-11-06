<?php

namespace DesignPatterns\Comportamentais\Mediator;

abstract class Usuario
{
    protected ?SalaDeChatMediatorInterface $mediator = null;

    protected string $nome;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    public function setMediator(SalaDeChatMediatorInterface $mediator): void
    {
        if (!is_null($this->mediator)) {
            $this->mediator->removerUsuario($this);
        }

        $this->mediator = $mediator;
        $this->mediator->adicionarUsuario($this);
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public abstract function enviar(string $mensagem): void;

    public abstract function receber(string $mensagem): void;
}
